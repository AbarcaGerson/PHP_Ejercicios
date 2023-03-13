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

        $numero = 300;
        $numero_redondeado = min($numero, 255);
        echo $numero_redondeado;


        $r = 255;
        $g = 255;
        $b = 255;

        $salida = strtoupper(sprintf('%02s%02s%02s', dechex(hexa_rgb($r)), dechex(hexa_rgb($g)), dechex(hexa_rgb($b))));
        echo $salida;

        function hexa_rgb(int $var): int {
            if ($var > 0) {
                if($var>255){
                    $numero_redondeado = min($var, 255);
                    return $numero_redondeado;
                }else{
                    return $var;
                }
            } else {
                return 0;
            }
        }

        function rgb($r,$g,$b){
            return sprintf("%02X%02X%02X", checkValue($r), checkValue($g), checkValue($b));
          }
          
          function checkValue($value){
            return $value > 255 ? 255 : ($value < 0 ? 0 : $value);
          }

    ?>
    
</body>
</html>