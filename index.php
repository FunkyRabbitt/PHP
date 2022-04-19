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
    echo "You are Marad<br>";
}

//----Switch case in PHP----
$weekDay = 5;

switch($weekDay){
    case 1:{
        echo "Sunday";
        break;
    }case 2:{
        echo "Monday";
        break;
    }case 3:{
        echo "Tuesday";
        break;
    }case 4:{
        echo "Wednesday";
        break;
    }case 5:{
        echo "Thursday";
        break;
    }case 6:{
        echo "Friday";
        break;
    }case 7:{
        echo "Saturday";
        break;
    }default:{
        echo "wrong Input";
        break;
    }
}

//---String concatination----
$FirstName = "<br>Sushant";
$LastName = "Khadka";
$FullName = $FirstName." ".$LastName."<br>";
echo $FullName;

//---while Loop in Php--
$i = 1;
while($i<=10){
    echo "Hellow world<br>";
    $i = $i +1;
}

//---Do while loop--
$i = 0;
do{
    echo "Hellow world<br>";
    $i = $i +1;
}while($i<=10)
?>

<?php
//---For loop--
for ($a = 1; $a<=10; $a++){
    echo $a."<br>";
}
?>














