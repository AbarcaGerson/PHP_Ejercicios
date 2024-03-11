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

            /*
            ENUNCIADO DEL PROBLEMA 
            Escribe una función que tome una cadena de una o más palabras y devuelva la misma cadena, pero con todas 
            las palabras que tienen cinco o más letras invertidas (Al igual que el nombre de este Kata). Las cuerdas pasadas 
            consistirán solo en letras y espacios. Los espacios se incluirán solo cuando haya más de una palabra presente.

            Ejemplos:

            "Hey fellow warriors"  --> "Hey wollef sroirraw" 
            "This is a test        --> "This is a test" 
            "This is another test" --> "This is rehtona test"
            */

            function spinWords(string $str): string {
                $arrayOutput = [];
                $array = [];
                $array = explode(" ", $str);

                foreach($array as $element){
                    $sizeElement = strlen($element);
                    if($sizeElement>=5){
                        $element = strrev($element);
                    }

                    $arrayOutput[] = $element;
                }

                return implode(' ',$arrayOutput);
            }

            function spinWordsKata(string $str): string {
                // TODO Have fun :)
                $boom = explode(' ', $str);
                
                
                foreach ($boom as &$word) {
                  if (strlen($word) >= 5) {
                    $word = strrev($word);
                  }
                }
                
                return implode(' ', $boom);
              }

            $salida = spinWords("Hey fellow warriors");

            print_r($salida);

        ?>

    </body>
</html>