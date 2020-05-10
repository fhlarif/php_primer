<?php
    $title='For Loop';
    include "include/header.php";
?>
    <h1>For Loop Statement</h1>

    <?php

        for ($count=0; $count <10 ; $count++) { 
            echo '<p>Hello World</p>';
        }

        for ($count=0; $count < 10; $count++) { 
            echo "<p>The count is $count</p>";
        }
    ?>
<?php
    include "include/footer.php";
?>