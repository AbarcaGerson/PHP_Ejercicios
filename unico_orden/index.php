<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        //Enunciado del problema
        // Implemente la función unique_in_order que toma como argumento una secuencia y devuelve una lista de elementos sin ningún elemento con el mismo valor uno al lado del otro y conservando el orden original de los elementos.

        // Por ejemplo:

        //SALIDA
        // uniqueInOrder("AAAABBBCCDAABBB") == {'A', 'B', 'C', 'D', 'A', 'B'}
        // uniqueInOrder("ABBCcAD")         == {'A', 'B', 'C', 'c', 'A', 'D'}
        // uniqueInOrder([1,2,2,3,3])       == {1,2,3}

        // echo '<br>';
        // //$str = "ABBCcAD";
        // $str = "AAAABBBCCDAABBB";
        // $prueba = preg_match_all('/(.)\1*/', $str, $matches);
        // $result = array_map(function($v){return str_split($v);}, $matches[0]);
        // print_r($matches[1]);
        // echo '<br>';


        //$iterable = [1,2,2,3,3];
        //$iterable = "AAAABBBCCDAABBB";
        $iterable = ['a','b','b'];

        $integer = [];
        if(gettype($iterable)=="array"){
          $integer = $iterable;
          $iterable  = implode($iterable);
        }
        preg_match_all('/(.)\1*/', $iterable, $matches);
        $base = [];
        $base = $matches[1];
        if(count($integer)>0){
          if(gettype($integer[1])=="string"){
            print_r($matches[1]);
          }
          $base = array_map('intval', $base);
          print_r($base);
        }
        print_r($matches[1]);


        function uniqueInOrder($iterable){ 
            $arr = is_string($iterable) ? str_split($iterable) : $iterable;
            $ret = array_reduce($arr, function($carry, $item) {
              if ($item != end($carry)) {
                $carry[] = $item;
              }
              return $carry;
            }, []);
            
            return $ret;
        }

    ?>
    
</body>
</html>