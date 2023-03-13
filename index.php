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
      function roundUp(int $number, array $list): array
      {
        if (!$list) return [];
        $min = min(array_map(function($x) use ($number) {return abs($number - $x);}, $list));
        return array_values(array_filter($list, function($x) use ($number, $min) {return abs($x - $number) == $min;}));
      }

      print_r(roundUp(-120,[-10, -20, -40, -80, -160, -320]));

    ?>

    <script>

      let numeros = [ 1,2,3,4,5];
      //let resultado = numeros.splice(numeros.length-2,2);

      let resultado = numeros.pop();

      console.log(resultado);

      console.log(2*3+4/2);

      let numeroActual = 0;
      while(numeroActual<10){
        console.log(numeroActual);
        numeroActual = numeroActual + 2;
      }

      let numbers = [1,5,2,4,3];

      let sorted = numbers.sort();

      sorted = numbers.reverse();

      console.log(sorted);

      let jsonData = '{ "nombre": "Juan Perez", "edad":30, "direccion": {"calle": "Calle principal", "cuidad": "Buenos aires"}}';
      let data = JSON.parse(jsonData);

      console.log(data.direccion.cuidad);

    </script>

</body>
</html>