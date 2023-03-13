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
    $k = 1;
    $array_salida = [];
    $array_return = [];
    $array_tamano = [];
    $max = -9999;
    $array = ["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"];

    for ($i = 0; $i < count($array); $i++) {
        if($k>1){
            if ($i<count($array)-1) {
                $array_salida[] = implode("",array_slice($array, $i, $k));
                if(strlen($array_salida[$i])>$max){
                    $max = strlen($array_salida[$i]);
                }
            }
        }
        elseif($k == 1){
            $array_salida[] = implode("",array_slice($array, $i, $k));
            if(strlen($array_salida[$i])>$max){
                $max = strlen($array_salida[$i]);
            }
        }
    }

    function longestConsec($strarr, $k) {
        $longest = '';
    
        for ($i = 0; $i <= count($strarr) - $k; $i++) {
            $string = '';
        
            for ($j = 0; $j < $k; $j++) {
                $string .= $strarr[$i + $j];
            }
            
            if (strlen($string) > strlen($longest)) {
                $longest = $string;
            }
        }
        
        return $longest;
    }
    
    for ($i = 0; $i < count($array); $i++) {

        if(strlen($array_salida[$i])==$max){
            $array_return[] = $array_salida[$i];
            break;
        }
    }
    
    print_r($max);

    echo "<br>";

    print_r($array_return);

    echo "<br>";

    print_r($array_salida);


    ?>
</body>
</html>