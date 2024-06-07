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
        Algunos números tienen propiedades divertidas. Por ejemplo:

        89 --> 8¹ + 9² = 89 * 1
        695 --> 6² + 9³ + 5⁴= 1390 = 695 * 2
        46288 --> 4³ + 6⁴+ 2⁵ + 8⁶ + 2360688 ⁷ 46288 * 51
        Dados dos enteros positivos n y p, queremos encontrar un número entero positivo k, 
        si existe, tal que la suma de los dígitos de n elevado a poderes consecutivos a partir de p 
        es igual a k * n.

        Nota: n y p siempre serán enteros estrictamente positivos.

        Ejemplos:
        n = 89; p = 1 ---> 1 since 8¹ + 9² = 89 = 89 * 1

        n = 92; p = 1 ---> -1 since there is no k such that 9¹ + 2² equals 92 * k

        n = 695; p = 2 ---> 2 since 6² + 9³ + 5⁴= 1390 = 695 * 2

        n = 46288; p = 3 ---> 51 since 4³ + 6⁴+ 2⁵ + 8⁶ + 8⁷ = 2360688 = 46288 * 51
    */

    function digPow($n, $p) {
        $arrayNumber = str_split($n);
        $sum = array_sum(array_map(function($value) use (&$p){
            return $value ** $p++;
        }, $arrayNumber));

        return $sum % $n == 0 ? $sum / $n : -1;
    }

    $n = 46288;
    $p = 3;
    
    print_r(digPow($n, $p));

    ?>
</body>
</html>