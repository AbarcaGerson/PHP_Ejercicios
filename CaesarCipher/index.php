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
        Escriba una clase que, cuando se le dé una cadena, devolverá una mayúscula cadena con cada letra 
        desplazada hacia adelante en el alfabeto por sin embargo muchos puntos el cifrado se inicializó a.

        Por ejemplo:

        $c = new CaesarCipher(5);
        $c->encode('Codewars'); // returns 'HTIJBFWX'
        $c->decode('BFKKQJX'); // returns 'WAFFLES'
        Si algo en la cadena no está en el alfabeto (por ejemplo, puntuación, espacios), simplemente déjelo como está.
        El cambio siempre estará dentro del rango de [1, 26].
    */

    function CaesarCipher(String $letra, int $saltos): String {
        $palabraFinal = '';

        foreach (str_split($letra) as $char) {
            if (!ctype_alpha($char)) {
                $palabraFinal .= $char;
                continue;
            }

            $char = strtolower($char);
            $nuevo_valor = ((ord($char) - 97 + $saltos + 26) % 26) + 97;
            $palabraFinal .= strtoupper(chr($nuevo_valor));
        }

        return $palabraFinal;
    }

    // Ejemplo de uso
    $palabraInicial = 'Htijbfwx';
    $saltos = -5;

    $nueva_letra = CaesarCipher($palabraInicial, $saltos);
    print_r($nueva_letra);

    ?>
</body>
</html>