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
        Supongamos que su compañía acaba de contratar a su amigo de la universidad y le pagó un bono de referencia. 
        ¡Impresionante! Para celebrarlo, llevarás a tu equipo al terrible bar de buceo de al lado y usarás el bono de referencia
        para comprar y construir la pirámide de cerveza tridimensional más grande que puedas. Y luego probablemente bebamos esas cervezas, 
        porque finjamos que también es viernes.
        Una pirámide de lata de cerveza cuadrará el número de latas en cada nivel: 1 lata en el nivel superior, 4 en el segundo,
         9 en el siguiente, 16, 25...
        Complete la función beeramid para devolver el número de completo niveles de una pirámide de lata de cerveza que puede hacer, 
        dados los parámetros de: su bono de referencia, y el precio de una lata de cerveza

        For example:

        beeramid(1500, 2); // should === 12
        beeramid(5000, 3); // should === 16
    */

    function beeramid($bonus, $price) {
        $totalCans = floor($bonus / $price);
        $level = 0;

        while ($totalCans >= pow($level + 1, 2)) {
            $level++;
            $totalCans -= pow($level, 2);
        }

        return $level;
    }

    print_r(beeramid(1500, 2));

    ?>
</body>
</html>