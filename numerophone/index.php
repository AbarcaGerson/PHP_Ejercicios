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
    $numbersArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    $cadena = "";

    if(count($numbersArray)==10){
        foreach ($numbersArray as $key => $value) {
            if($key==0) $cadena .= "(" . $value;
            elseif($key==2) $cadena .= $value . ") ";
            elseif($key==5) $cadena .= $value . "-";
            else $cadena .= $value . "";
        }
    }else{
        return [];
    }


    print_r($cadena);

    echo "<br>";

    $digits = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];

    $salida = sprintf("(%d%d%d) %d%d%d-%d%d%d%d", ...$digits);

    print_r($salida);
    


    ?>

</body>
</html>