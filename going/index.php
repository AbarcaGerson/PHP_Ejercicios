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
        Consider the following numbers (where n! is factorial(n)):

        u1 = (1 / 1!) * (1!)
        u2 = (1 / 2!) * (1! + 2!)
        u3 = (1 / 3!) * (1! + 2! + 3!)
        ...
        un = (1 / n!) * (1! + 2! + 3! + ... + n!)
        Which will win: 1 / n! or (1! + 2! + 3! + ... + n!)?

        Are these numbers going to 0 because of 1/n! or to infinity due to the sum of factorials or to another number?

        Task
        Calculate (1 / n!) * (1! + 2! + 3! + ... + n!) for a given n, where n is an integer greater or equal to 1.

        Your result should be within 10^-6 of the expected one.

        Remark
        Keep in mind that factorials grow rather rapidly, and you need to handle large inputs.
    */

    function going($n) {
        $res = 1; 
        $del = 1;

        for($i=$n;$i>1;$i--){
          $del /= $i;
          $res += $del;
        }
        
        return substr($res,0,8);
    }

    print_r(going(200));
    ?>
</body>
</html>