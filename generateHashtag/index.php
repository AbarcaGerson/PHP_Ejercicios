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
        $response = "";
        $wordArray = str_split(strtolower($str));

        if(count($wordArray) < 0 || count($wordArray) > 140){
            $response = "false";
            return $response;
        }

        $wordSeparate = explode(' ', $str);
        foreach($wordSeparate as $element){
            trim($element);
            $response = $element;
        }
        return $wordSeparate;
    }
    
    print_r(generateHashtag("Codewars is nice"));

    ?>
</body>
</html>