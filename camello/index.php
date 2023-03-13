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

    $cadena = "the-stealth-warrior";
    $separadas = str_split($cadena);
    $array_resultado = [];
    $guion_abajo = false;
    $guion = false;

    foreach($separadas as $value){
        if($value == '_'){
            $guion_abajo = true;
        }
        if($value == '-'){
            $guion = true;
        }
    }
    
    if($guion_abajo){
        $resultados = explode("_",$cadena);
        foreach($resultados as $key => $resultado){
            if($key!=0){
                $array_resultado[] = ucfirst($resultado);
            }else{
                $array_resultado[] = $resultado;
            }
        }
    }
    elseif($guion){
        $resultados = explode("-",$cadena);
        foreach($resultados as $key => $resultado){
            if($key!=0){
                $array_resultado[] = ucfirst($resultado);
            }else{
                $array_resultado[] = $resultado;
            }
        }
    }

    $salida = implode("", $array_resultado);

    print_r($salida);

    function toCamelCase($str){
        return preg_replace_callback("~[_-](\w)~", function($m) { return strtoupper($m[1]); }, $str);
    }


    ?>
</body>
</html>