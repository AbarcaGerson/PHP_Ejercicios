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


    // Enunciado del problema
    // You probably know the "like" system from Facebook and other pages. People can "like" blog posts, pictures or other items. We want to create the text that should be displayed next to such an item.
    // Implement the function which takes an array containing the names of people that like an item. It must return the display text as shown in the examples:

    //Salida esperada
    // []                                -->  "no one likes this"
    // ["Peter"]                         -->  "Peter likes this"
    // ["Jacob", "Alex"]                 -->  "Jacob and Alex like this"
    // ["Max", "John", "Mark"]           -->  "Max, John and Mark like this"
    // ["Alex", "Jacob", "Mark", "Max"]  -->  "Alex, Jacob and 2 others like this"

    //$names = [ 'Jacob', 'Alex' ] ;
    //$names = [ 'Peter'];
    //$names = [ 'Max', 'John', 'Mark' ];
    //$names = [ 'Alex', 'Jacob', 'Mark', 'Max' , 'Gerson'];
    $names = [];

    $cantidad = count($names);

    switch($cantidad){
        case 0:
            print_r("no one likes this");
            break;
        case 1:
            print_r(sprintf('%02s like this',$names[0]));
            break;
        case 2:
            print_r(sprintf('%02s and %02s like this',$names[0],$names[1]));
            break;
        case 3:
            print_r(sprintf('%02s, %02s and %02s like this',$names[0],$names[1],$names[2]));
            break;
        case 4:
        default:
            $others = $cantidad - 2;
            print_r(sprintf('%02s, %02s and %s others like this',$names[0],$names[1],$others));
            break;
    }

    function likes(array $names): string {
        switch (count($names)) {
            case 0:
                return 'no one likes this';
            case 1:
                return vsprintf('%s likes this', $names);
            case 2:
                return vsprintf('%s and %s like this', $names);
            case 3:
                return vsprintf('%s, %s and %s like this', $names);
            default:
                return sprintf('%s, %s and %d others like this', $names[0], $names[1], count($names) - 2);
        }
    }

    ?>
</body>
</html>