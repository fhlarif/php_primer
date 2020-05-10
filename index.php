<?php
    $title='Index';
    include "include/header.php";
?>
    <!--Basic HTML  -->
    <h1>Hello World - PHP Primer</h1>

    <?php 
        //printing to HTML using echo
        echo 'Hello PHP'; 
        echo '<br/>';
        echo 'Second line';
        echo '<br/>';
     ?>

     <?php
        //declare variable
        $name ='Fathul';
        $age = 26;
        //echo variable
        echo $name;
        echo '<h1>My name is : '.$name.'</h1>';
        echo '<h1>My age is : '.$age.'</h1>';
        echo "<h1>Doble Qoute: My name is $name</h1>"
     ?>

    <button type="button" class="btn btn-dark">Click me</button>
    <button type="button" class="btn btn-primary">Click me</button>
    <button type="button" class="btn btn-success">Click me</button>
    <a href="https://www.heroku.com" class="btn btn-danger"target="_blank">Heroku.com</a>
<?php
    include "include/footer.php";
?>