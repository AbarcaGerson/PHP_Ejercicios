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

        $text = "hello world";
        $characters = str_split(strtoupper($text));
        $char_count = array_count_values($characters);
        $count_repeat = 0;
      
        print_r($char_count);
        echo "<br>";
      
        foreach($char_count as $char => $count) {
          if($count > 1) {
            $count_repeat++;
          }
        }

        print_r($count_repeat);

        function duplicateCount($text) {

            $dupCount = 0;
            $text = array_count_values(str_split(strtolower($text)));
            
            foreach ($text as $val) {
            if ($val > 1) { $dupCount = $dupCount+1; }   
            }
            
            return $dupCount;
        }

    ?>

</body>
</html>