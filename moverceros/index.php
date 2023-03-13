<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Mover Ceros</title>
</head>
<body>

    <?php

        $items = [1,2,0,1,0,1,0,3,0,1];
        $array_salida = [];
        $array_salida2 = [];

        for($i = 0 ; $i<count($items) ; $i++){
            if($items[$i]===0){
                $array_salida[] = $items[$i];
            }
            else{
                $array_salida2[] = $items[$i];
            }
        }

        print_r($array_salida);
        echo '<br>';
        $resultado = array_merge($array_salida2, $array_salida);
        print_r($resultado);

        function moveZeros(array $items): array {
            return array_pad(array_filter($items, function($x){return $x !== 0 and $x !== 0.0;}), count($items), 0);
        }

    ?>

</body>
</html>