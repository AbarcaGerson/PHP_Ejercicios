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
        Given an integer, return a string with dash '-' marks before and after each odd digit,
        but do not begin or end the string with a dash mark.

        Ex:

        274 -> '2-7-4'
        6815 -> '68-1-5'
    */
    
    function dashatize(int $num): string {
        // Convertir el número a una cadena, manejar números negativos.
        $numStr = (string)abs($num);
        $result = '';

        for ($i = 0; $i < strlen($numStr); $i++) {
            if ($numStr[$i] % 2 != 0) {
                // Agregar guiones alrededor de números impares.
                $result .= '-' . $numStr[$i] . '-';
            } else {
                $result .= $numStr[$i];
            }
        }

        // Reemplazar dobles guiones con uno solo y eliminar guiones al principio y al final.
        $result = trim(str_replace('--', '-', $result), '-');

        return $result;
    }
    
    print_r(dashatize(974302));

    ?>
</body>
</html>