<?php
    $title='Simple Function';
    include "include/header.php";
?>
    <h1>Simple Function</h1>
    <?php

        function writeMessage(){
            echo "You are nice <br/>";
        }
         writeMessage();
         writeMessage();
         writeMessage();
         writeMessage();

         function addFunction($num1,$num2){
             $sum= $num1+$num2;
             print "The sum of $num1 and $num2 is $sum <br/>";
         }

         function changeNum(&$num){
             $num=$num+10;
             //$num+=10;
            //& pass by reference
         }

         function returnProducts($num1, $num2){
            $prod=$num1*$num2;
            return $prod;
         }

         $num=400;
         addFunction(20,48);
         $num2=633;
         addFunction(30, $num2);
         addFunction('12',"34");
         echo "Before it's: $num";

         changeNum($num);
         echo "<br/> Now it's: $num <br/>";

         $return_product=returnProducts(73,34);
         echo "<br/> Return value is: $return_product <br/>";
    ?>
<?php
    include "include/footer.php";
?>