<?php
    $title='If Statement';
    include "include/header.php";
?>
<h1><?php echo $title ?></h1>
    <?php

    $grade =20;
    if($grade  >=50){
        echo '<h3 style="color: green">You have passed</h3>';
    }
    else{
        echo '<h3 style="color: red">You have failed</h3>';
    }
    $grade='A';
    if($grade =='C'){
        echo '<h3 style="color: red">You dong</h3>';
    }elseif($grade =='A'){
        echo '<h3 style="color: green">You good</h3>';
    }else{
        echo '<h3 style="color: blue">You nun</h3>';
    }
        
    ?>
<?php
    include "include/footer.php";
?>