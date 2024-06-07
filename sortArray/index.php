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

    /* ENUNCIADO:
        Se le dará una serie de números. Tienes que ordenar los números impares en orden ascendente 
        mientras dejas los números pares en sus posiciones originales.

        Ejemplos
        [7, 1]  =>  [1, 7]
        [5, 8, 6, 3, 4]  =>  [3, 8, 6, 5, 4]
        [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]  =>  [1, 8, 3, 6, 5, 4, 7, 2, 9, 0]
    */

    function sortArray(array $arr) : array {
        $impares = array_filter($arr, function($value){
            return $value % 2 != 0;
        });

        sort($impares);

        foreach($arr as $index => $value){
            if($value % 2 != 0){
                $arr[$index] = array_shift($impares);
            }
        }

        return $arr;
    }

    // $array = [5, 8, 6, 3, 4];
    $array = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
    
    print_r(sortArray($array));

    ?>
</body>
</html>