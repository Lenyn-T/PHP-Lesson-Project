<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $calcOpr = $_GET['calcOpr'];
    switch ($calcOpr) {
        case 'sum':
            $res = $num1 + $num2;
            echo "Sum result: ".$num1." + ".$num2." = ".$res;
            break;
        case 'sub':
            $res = $num1 - $num2;
            echo "Subtraction result: ".$num1." - ".$num2." = ".$res;
            break;
        case 'div':
            $res = $num1 / $num2;
            echo "Division result: ".$num1." ÷ ".$num2." = ".$res;
            break;
        case 'mul':
            $res = $num1 * $num2;
            echo "Multiplication result: ".$num1." * ".$num2." = ".$res;
            break;
        case 'sqr':
            $res1 = sqrt($num1);
            $res2 = sqrt($num2);
            echo "Square root results: <br>
            √".$num1." = ".$res1."<br>
            √".$num2." = ".$res2;
            break;
    }
?>