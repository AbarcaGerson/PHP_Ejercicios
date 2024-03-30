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
        El equipo de marketing pasa demasiado tiempo escribiendo hashtags.
        ¡Ayudémoslos con nuestro propio Generador Hashtag!

        Aquí está el trato:

        Debe comenzar con un hashtag (#).
        Todas las palabras deben tener su primera letra en mayúscula.
        Si el resultado final es superior a 140 caracteres, debe devolver false.
        Si la entrada o el resultado es una cadena vacía, debe volver false.
    */

    function generateHashtag($str) {
        $str = trim($str);
        if ($str === "") {
            return false;
        }

        $response = array_map('ucfirst', explode(' ', $str));
        $hashtag = '#' . implode('', $response);

        if (strlen($hashtag) > 140) {
            return false;
        }

        return $hashtag;
    }

    function generateHashtagKata($str) {
  
        $str = '#' . str_replace(' ', '', ucwords($str));
        
        return (strlen($str) > 140 || strlen($str) == 1) ? false : $str;
     }
    
    print_r(generateHashtagKata("codewars is nice"));

    ?>
</body>
</html>