<?php
    $title='Array';
    include "include/header.php";
?>
    <h1> Array</h1>
    <?php
        //variable
        $num=3;
        //array n-1
        $numbers= array(1,2,3,4,5,6,7,8,9,10,123,434,45,67,78,89,12);

        echo $numbers[5];
        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>Array number size is $size</p>";    

        for ($count=0; $count <$size ; $count++) { 
            echo "<p>$numbers[$count]</p>";
        }
    ?>
<?php
    include "include/footer.php";
?>