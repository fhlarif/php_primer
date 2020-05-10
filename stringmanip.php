<?php
    $title='String Manipulation';
    include "include/header.php";
?>
    <h1>String Manipulation</h1>
    <?php
        $phrase1="get me some rice";
        $phrase2="hardcoded the codes";
        $name='fathul arif';
        echo '<h3>String Concatenation</h3>';
        //concatenation
        echo $phrase1 .", or I will ".$phrase2;

        echo '<h3>String Manipulation</h3>';
        //strig manip
        echo '<p>Uppercase first letter: '.ucfirst($name).'</p>';
        echo '<p>Uppercase first letter of each word: '.ucwords($name).'</p>';
        echo '<p>Uppercase : '.strtoupper($name).'</p>';
        echo '<p>Lowercase : '.strtolower($name).'</p>';
        echo '</br>';
        echo 'Repeat String: '.str_repeat('a',10). '<br>';
        echo 'Repeat String: '.strtoupper(str_repeat('a',10)). '<br>';
        echo 'Get a Substring: '. substr($name,5,10). '<br/>';
        echo 'Get position of the string: '.strpos($name,'l'). '<br/>';
        echo 'Find Character "u"; '.strchr($name, 'u').'<br/>';
        echo 'Find length of string: '. strlen($name).'<br/>';
        echo 'Without trim: '.'a'.' b c d '.'e'.'<br/>';  
        echo 'Trim space both sides: '.'a'.trim(' b c d ').'e'.'<br/>';  
        echo 'Trim space left: '.'a'.ltrim(' b c d ').'e'.'<br/>';  
        echo 'Trim space right: '.'a'.rtrim(' b c d ').'e'.'<br/>'; 
        echo 'Replace string: '. str_replace("rice","mice",$phrase1).'<br/>'; 
    ?>
<?php
    include "include/footer.php";
?>