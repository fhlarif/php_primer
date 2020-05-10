<?php
    $title='Switch Statement';
    include "include/header.php";
?>
    <h1>Switch Statement</h1>

    <?php
    $grade = 'x';

    switch ($grade) {
        case 'A':
            echo '<h2 style ="color: green" >Got A</h2>';
            break;
        case 'B':
            echo '<h2 style ="color: green">Got B</h2>';
        break;
        default:
        echo '<h2 style ="color: red">Got C</h2>';
            break;
    }
    ?>
<?php
    include "include/footer.php";
?>