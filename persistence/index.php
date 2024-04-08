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
        Escribe una función, persistence, ése toma un parámetro positivo num y devuelve su persistencia multiplicativa, 
        que es la cantidad de veces que debe multiplicar los dígitos num hasta que alcances un solo dígito.

        Por ejemplo (Entrada --> Salida):

        39 --> 3 (because 3*9 = 27, 2*7 = 14, 1*4 = 4 and 4 has only one digit)
        999 --> 4 (because 9*9*9 = 729, 7*2*9 = 126, 1*2*6 = 12, and finally 1*2 = 2)
        4 --> 0 (because 4 is already a one-digit number)
    */

    function persistence(int $num, int $count = 0) {
        if ($num < 10) {
            return $count;
        } else {
            $product = array_product(str_split($num));
            return persistence($product, $count + 1);
        }
    }

    function persistenceKata(int $num): int {
        return $num > 9 ? persistenceKata(array_product(str_split($num))) + 1 : 0;
    }

    print_r(persistenceKata(999));

    ?>
</body>
</html>