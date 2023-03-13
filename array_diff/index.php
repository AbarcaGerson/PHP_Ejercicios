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

    $a = [24];
    $b = [22, 36, 29, 26, 37, 40, 39];

    $resultado = [];
    $array_salida = [];

    if(isset($a) && isset($b)){
        $resultados = array_diff($a,$b);
        foreach($resultados as $value){
            $array_salida[] = $value;
        }
        print_r($resultados);
        echo "<br>";
        print_r($array_salida);
    }elseif(!isset($a)){
        return "[]";
    }elseif(!isset($b)){
        return $a;
    }

    function arrayDiff($a, $b) {
        return array_values(array_diff($a, $b));
    }

    $resultado_kata = array_values(array_diff($a, $b));

    print_r($resultado_kata);

    ?>


</body>
</html>