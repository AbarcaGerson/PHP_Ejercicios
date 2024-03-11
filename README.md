# Solved PHP problems

Set of problems solved in the CodeWars platform under the PHP language, each folder is a solved problem, submitted and accepted by CodeWars.


## Problems/Solutions (Example)

Write a function that takes in a string of one or more words, and returns the same string, but with all words that have five or more letters reversed (Just like the name of this Kata). Strings passed in will consist of only letters and spaces. Spaces will be included only when more than one word is present.

Examples:

"Hey fellow warriors"  --> "Hey wollef sroirraw"

"This is a test        --> "This is a test" 

"This is another test" --> "This is rehtona test"

```javascript
function spinWords(string $str): string {
    $arrayOutput = [];
    $array = [];
    $array = explode(" ", $str);

    foreach($array as $element){
        $sizeElement = strlen($element);
        if($sizeElement>=5){
            $element = strrev($element);
        }

        $arrayOutput[] = $element;
    }

    return implode(' ',$arrayOutput);
}
```

