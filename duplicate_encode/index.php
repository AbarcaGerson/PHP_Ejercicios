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
        El objetivo de este ejercicio es convertir una cadena en una nueva cadena donde cada carácter 
        de la nueva cadena es "(" si ese carácter aparece solo una vez en la cadena original, o ")" si ese 
        carácter aparece más de una vez en la cadena original. Ignore la capitalización al determinar si un carácter 
        es un duplicado.

        Ejemplos
        "din"      =>  "((("
        "recede"   =>  "()()()"
        "Success"  =>  ")())())"
        "(( @"     =>  "))((" 

        Notas
        Los mensajes de afirmación pueden no estar claros sobre lo que muestran en algunos idiomas. 
        Si lees "...It Should encode XXX", el "XXX" es el resultado esperado, no la entrada!
    */

    function duplicate_encode($word){
        $word = strtolower($word);
        return implode('', array_map(function($char) use ($word) {
            return substr_count($word, $char) > 1 ? ')' : '(';
        }, str_split($word)));
    }

    echo duplicate_encode("(( @");

    ?>
</body>
</html>