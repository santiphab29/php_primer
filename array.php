<?php 
        $title = 'Array';
        include 'includes/header.php';


    ?>
    <h1><?php echo  $title ?></h1>
    <?php
        $num = 3;

        $numbers = array(1,2,3,4,5,6,7,8,9,10,55,365,201,445,895,441,255,12,52,36,8,74,22,0,56,19,66,22);

        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

            $size = count($numbers);
        echo "<p>Array Numbers is size:$size </p>  ";
        for($count =0;$count < 28;$count++){
            echo "<p>$numbers[$count]</p>";
        }
    ?>
    
    <?php
            require'includes/footer.php '
     ?>
