<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba para PHP</title>
</head>
<body>
    

<?php

  $array =  [-10, -20, -40, -80, -160, -320];

  $array_salida = [];

  $sum_negative = 0;

  $all_mixed = true;

  $number = -120;
  $tamaño = count($array);
  echo "El tamaño del array es: $tamaño\n";
  echo "<br>";

    if(!empty($array)){
    array_push($array, $number);

    sort($array);

    $longitud_array = count($array);

    echo "El tamaño de array salida es: $longitud_array\n";

    echo "<br>";

    for ($i = 0; $i < $longitud_array; $i++) {
      echo "$array[$i]";
      echo "<br>";

      if($array[$i] < 0){
        $all_mixed = false;
        $sum_negative++;
      }
    }

    echo "<br>";

    if($all_mixed == false){
      for ($i = 0; $i < $longitud_array; $i++) {
        echo "$array[$i]";
        echo "<br>";
  
        if($array[$i] == $number){
          if($sum_negative==$longitud_array){
            array_push($array_salida, $array[$i-1]);
            array_push($array_salida, $array[$i+1]);
            rsort($array_salida);
          }
          else{
            array_push($array_salida, $array[$i-1]);
            array_push($array_salida, $array[$i+1]);
          }
        }
      }
    }elseif($all_mixed == true){
      for ($i = 0; $i < $longitud_array; $i++) {
        echo "$array[$i]";
        echo "<br>";
  
        if($array[$i] == $number){
          if($array[$i]-$array[$i-1]<=2){
            array_push($array_salida, $array[$i-1]);
          }elseif($array[$i+1]-$array[$i]<=2){
            array_push($array_salida, $array[$i+1]);
          }
        }
      }
    }

    print_r($array_salida);


  }
  else{
    $array_vacio = [];
    return $array_vacio;
  }



?>

</body>
</html>