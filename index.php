<?php 
        $title = 'index';
        include 'includes/header.php';
?>
    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>
    <?php
        //Printing to HTML using echo   
        echo 'Hello PHP!';
        echo '<br/>Second Line';
     ?>

     <?php 
        $name = 'Santiphab Sitti';
        $age = 55551;
        echo '</br>';
        echo $name;
        echo '<h1>My name is : '.$name.'</h1>';
        echo '<h1>My AGE is : '.$age.'</h1>';

        echo "<h1>My name is : $name </h1>";
     ?>
     <?php
            require'includes/footer.php '
     ?>

