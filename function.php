<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Functions</title>
</head>
<body>
    <h1> Function</h1>

    <?php
        function writeMessage(){
            echo "You are really a nice person, Have a nice time! <br/>";
        }

        writeMessage();
        echo "<hr/>";
        writeMessage();

        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            $num2 = $num2 + 1;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }
        function changeNum(&$num){
            $num = $num + 10;
            // $num+= 10;
        }

        function returnProduct($num1,$num2){
            $prod = $num1 * $num2;
            return $prod;
        }

        $return_value = returnProduct(10, 200);
        echo $return_value . '<br/>';


        $num= 90 ;
         addfunction($num,20);
         addfunction(89,45);
         addfunction(12,20);

         changeNum($num);
         echo $num .'<br/>';
    ?>

    
</body>
</html>