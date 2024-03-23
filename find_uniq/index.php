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
            Hay una matriz con algunos números. Todos los números son iguales excepto uno. ¡Intenta encontrarlo!

            findUniq([ 1, 1, 1, 2, 1, 1 ]) === 2
            findUniq([ 0, 0, 0.55, 0, 0 ]) === 0.55
            Se garantiza que la matriz contiene al menos 3 números.

            Las pruebas contienen algunas matrices muy grandes, así que piense en el rendimiento.

            Este es el primer kata en serie:

            Encuentra el número único (este kata)
            Encuentra la cadena única
            Encuentra El Único
            */

            function find_uniq(array $a) {
                $counts = [];
                foreach ($a as $value) {
                    $strVal = strval($value);
                    if (!isset($counts[$strVal])) {
                        $counts[$strVal] = 0;
                    }
                    $counts[$strVal]++;
                }
                $unico = array_search(1, $counts);
                return $unico + 0;
            }

            function fin_uniq_kata(array $a){
                sort($a);
                return ($a[0] === $a[1]) ? end($a) : current($a);
            }

            $arrayBase = [0, 0, 0.55, 0, 0]; 

            $salida = fin_uniq_kata($arrayBase);

            print_r($salida);

        ?>

    </body>
</html>