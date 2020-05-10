<?php
    $title='While Do While';
    include "include/header.php";
?>
    <h1> While Statement</h1>
    <?php
        $grade=0;
        while ($grade <= 10) {
            echo '<p>Less than 10</p>';
            $grade++;
        }
        echo 'Exit loop';
    ?>
    <h1>Do While Statement</h1>
    <?php
        $grade=0;
        do {
            echo '<p>Do While loop</p>';
            $grade++;
        } while ($grade <= 10);
        echo 'Exit loop';
    ?>
<?php
    include "include/footer.php";
?>