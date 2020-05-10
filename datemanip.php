<?php
    $title='Date/time Manipulation';
    include "include/header.php";
?>
    <h1>Date Time Manipulation</h1>
    <?php
        $datenow=getdate();
        echo "Today's date: </br>";
        echo $datenow['mday'].'<br/>';
        echo $datenow['mon'].'<br/>';
        echo $datenow['year'].'<br/>';
        
        echo "Today's date: ". $datenow['mday']. '/'.$datenow['mon'].'/'.$datenow['year'].'<br/>';
        echo 'Time: '. time(). '<br/>';

        print date("d/m/y g.i:s<br/>");
       

    ?>
<?php
    include "include/footer.php";
?>