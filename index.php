<?php
echo "Hellow world</br>";
echo "second line";

//----Variable in Php----
$A = "First Variable<br>";
$Num = 2345;
echo $A;
echo $Num;
echo "<h1>".$A."</h1>";

//---Sum of two  number---
$Number1 = 12;
$Number2 = 4;
$Sum = $Number1 + $Number2;
$Sub = $Number1 - $Number2;
echo "The Addition of Two number is : ".$Sum."<br>";
echo "The Subtraction of Two number is : ".$Sub."<br>";

//---Condition in PHP------
$num = 15;
if($num<10){
    echo "You are a child.<br> ";
}elseif($num== 10){
    echo "Your are only 10.";
}elseif($num<=15){
    echo "You are Marad";
}


?>
