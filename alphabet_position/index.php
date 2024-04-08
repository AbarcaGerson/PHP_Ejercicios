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
        Bienvenidos.

        En este kata se requiere que, dada una cadena, reemplace cada letra con su posición en el alfabeto.

        Si algo en el texto no es una letra, ignórelo y no lo devuelva.

        "a" = 1, "b" = 2, etc.

        Ejemplo
        alphabet_position("The sunset sets at twelve o' clock.")
        Debería regresar "20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11" (como una cadena )
    */

    function alphabet_position(string $s): string {
        $arrayWord = str_split($s);
        $positions = array_map('posicionEnAlfabeto', $arrayWord);
        $positions = array_filter($positions, 'is_numeric');
        return implode(' ', $positions);
    }

    function posicionEnAlfabeto($letra) {
        return ctype_alpha($letra) ? ord(strtolower($letra)) - 96 : '';
    }
    
    // Ejemplo de uso
    $letra = 'The sunset sets at twelve o\' clock.';
    $salida = alphabet_position($letra);
    print_r($salida);

    function alphabet_positionKata(string $s): string {
  
        $result = [];
        
        for ($i = 0; $i < strlen($s); $i++) {
      
          if (preg_match("/^[a-zA-Z]$/", $s[$i])) {
            $result[] = ord(strtolower($s[$i])) - ord('a') + 1;
          }
        }
        
        return join(' ', $result);
    }

    ?>
</body>
</html>