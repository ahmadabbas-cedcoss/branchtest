<?php 
   $result=$_POST['result'];
   $string=$_POST['string'];
   $op=$_POST['op'];

calculate($result,$string,$op);
function calculate($result,$string,$op){
   switch($op) {
      case "*":
         $result=$result*$string;
         echo $result;
         break;
      case "+":
         $result=$result+$string;
         echo $result;
         break;
      case "-":
         $result=$result-$string;
         echo $result;
         break;
      case "/":
         $result=$result/$string;
         echo $result;
         break;
   }
}
 echo "string";
 echo "string";
 echo "string";
 ?>

pranjal
ahmad