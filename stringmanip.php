<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - String Manipulation</title>
</head>
<body>
    <h1>PHP  String Manipulation</h1>
    <?php
            $phrase1 = "student who came late";
            $phrase2 = "IN class, stand with Rock";
            $name = "trevoir williams";
            echo '<hr>';
            echo $phrase1 .", name Afat santip, ".$phrase2;
            echo '</br>';
            echo ' Uppercase first letter: '. ucfirst($name) . '</br>';
            echo ' Uppercase first letter of each word: '. ucwords($name) . '</br>';
            echo 'Upper case:'.strtoupper($name).'</br>';
            echo 'Lower case:'.strtolower("THOS WAS ALL UPPER CASE").'</br>';
            echo '<hr>';
            echo 'Repeast String:'.strtoupper(str_repeat($name,10)).'<br>';
            echo 'Repeast String:'.strtoupper(str_repeat('a',10)).'<br>';
            echo 'Get a substring:'.substr($name,3,5).'</br>';
            echo 'Get position of the string: '.strpos($name,'w').'<br>';

            echo 'Find Character "R":'.strchr($name,'R').'<br>';
            echo 'Find Character "r":'.strchr($name,'r').'<br>';
            echo 'Find Character "s":'.strchr($name,'s').'<br>';
            echo 'Find Character "e":'.strchr($name,'e').'<br>';

            echo 'Find Length of String: ' . strlen($name) .'<br/>';
        
        echo 'Without Trim: '. "A" . " B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';

        echo ' Replace string with another: '. str_replace("stand", "sit", $phrase2 ) . '<br/>';
    ?>
    
</body>
</html>