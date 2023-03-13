<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiempo legible por humanos</title>
</head>
<body>

    <?php
        $seconds = 359999;

        if($seconds>=0){
            $horas = intdiv($seconds, 3600);
            $segundos = $seconds % 3600;
            $minutos = intdiv($segundos, 60);
            $segundos = $segundos % 60;
            if($horas<10){
                $horas = '0'.$horas;
            }
            if($minutos<10){
                $minutos = '0'.$minutos;
            }
            if($segundos<10){
                $segundos = '0'.$segundos;
            }
            $salida = $horas.':'.$minutos.':'.$segundos;
            print_r($salida);
        }else{
            $salida_2 = '00:00:00';
            print_r($salida_2);
        }

        function human_readable(int $seconds): string
        {
            return sprintf('%02d:%02d:%02d', $seconds / 3600, ($seconds % 3600) / 60, $seconds % 60);
        }

        echo '<br>';
        $prueba = sprintf('%02d:%02d:%02d', $seconds / 3600, ($seconds % 3600) / 60, $seconds % 60);
        print_r($prueba);

    ?>
    
</body>
</html>