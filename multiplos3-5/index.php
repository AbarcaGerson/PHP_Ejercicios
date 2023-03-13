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

  $number = 20;
  echo "El número n es: $number";
  echo "<br>";

  $array_resultado = [];
  $numbers = range(1, $number-1);

  
  $multiples_of_3 = array_filter($numbers, function ($value) use($array_resultado) {
    if($value % 3 == 0 || $value % 5 == 0){
      array_push($array_resultado,$value);
    }
    return $array_resultado;
  });
  
  print_r(array_sum($multiples_of_3));


  function solution($number){
    return array_sum(array_filter(range(1, $number-1), function ($item) {
        return $item % 3 == 0 || $item % 5 == 0;
    }));
  }

  ?>
  
</body>
</html>