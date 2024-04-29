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
        Se le dará una matriz de enteros. Su trabajo es tomar esa matriz y encontrar un índice N donde la suma de 
        los enteros a la izquierda de N es igual a la suma de los enteros a la derecha de N. Si no hay un índice que haga que esto suceda, regrese -1.

        Por ejemplo:
        Digamos que se le da la matriz {1,2,3,4,3,2,1}:
        Su función devolverá el índice 3, porque en la 3a posición de la matriz, la suma del lado izquierdo del índice ({1,2,3}) y 
        la suma del lado derecho del índice ({3,2,1}) ambos iguales 6.

        Veamos otro.
        Se le da la matriz {1,100,50,-51,1,1}:
        Su función devolverá el índice 1, porque en la 1a posición de la matriz, la suma del lado izquierdo del índice ({1}) y 
        la suma del lado derecho del índice ({50,-51,1,1}) ambos iguales 1.

        Último:
        Se le da la matriz {20,10,-80,10,10,15,35}
        En el índice 0 el lado izquierdo es {}
        El lado derecho es {10,-80,10,10,15,35}
        Ambos son iguales a 0 cuando se agrega. (Las matrices vacías son iguales a 0 en este problema)
        El índice 0 es el lugar donde el lado izquierdo y el lado derecho son iguales.

        Nota: Recuerde que en la mayoría de los idiomas el índice de una matriz comienza en 0.

        Entrada
        Una matriz entera de longitud 0 < arr < 1000. Los números en la matriz pueden ser cualquier número entero positivo o negativo.

        Salida
        El índice más bajo N donde el lado a la izquierda de N es igual al lado derecho de N. Si no encuentra un índice que se ajuste a estas reglas, volverá -1.

        Nota
        Si se le da una matriz con múltiples respuestas, devuelva el índice correcto más bajo.
    */

    function find_even_index($arr){
        $totalSum = array_sum($arr);
        $leftSum = 0;

        foreach($arr as $index => $value){
            $totalSum -= $value;

            if($leftSum == $totalSum){
                return $index;
            }

            $leftSum += $value;
        }

        return -1;   
    }

    // $array = [1,2,3,4,3,2,1];
    // $array = [1,100,50,-51,1,1];
    // $array = [20,10,-80,10,10,15,35];
    
    print_r(find_even_index($array));

    ?>
</body>
</html>