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
        Construir Torre
        Construya una torre en forma de pirámide, como una matriz/lista de cuerdas, 
        dado un número entero positivo number of floors. Un bloque de torre se representa 
        con "*" carácter.

        Por ejemplo, una torre con 3 los pisos se ven así:

        [
        "  *  ",
        " *** ", 
        "*****"
        ]
        Y una torre con 6 los pisos se ven así:

        [
        "     *     ", 
        "    ***    ", 
        "   *****   ", 
        "  *******  ", 
        " ********* ", 
        "***********"
        ]
    */

    function tower_builder(int $n): array {
        $array = [];
        for($i = 1; $i <= $n; $i++){
            $stars = str_repeat('*', $i * 2 - 1);
            $spaces = str_repeat(' ', $n - $i);
            $salida = $spaces . $stars . $spaces;
            $array[] = $salida;
        }

        return $array;
    }
    
    print_r(tower_builder(3));

    ?>
</body>
</html>