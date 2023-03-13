<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAMMING</title>
</head>
<body>
    
    <?php
        $a = "old father, old artificer";
        $b = "of my soul the uncreated ";

        $array_1 = implode(" ",(explode(" ", $a)));
        $array_2 = implode(" ",(explode(" ", $b)));

        $array_salida1 = str_split($array_1);
        $array_salida2 = str_split($array_2);
        $contador = 0;
        
        for ($i = 0; $i < count($array_salida1); $i++) {
            if ($array_salida1[$i] != $array_salida2[$i]) {
                $contador++;
            }
        }

        print_r($array_salida1);
        echo '<br>';
        print_r($array_salida2);
        echo '<br>';
        print_r($contador);


    ?>

</body>
</html>