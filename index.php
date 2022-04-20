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

<?php
//---Nested Loop---
for($num=1;$num<=100;){
    for($secondNumber=$num;$secondNumber< $num+10;$secondNumber++){
        echo $secondNumber." ";
    }
    echo "<br>";
    $num = $num+10;
}
?>
<?php
//---Creating function---
function Addition($FirstNumber , $SecondNumber){
    $Total = $FirstNumber + $SecondNumber;
    echo "The Addition of Two number $FirstNumber and $SecondNumber is : ".$Total."<br>";
}
function Subtraction($FirstNumber,$SecondNumber){
    $Total = $FirstNumber - $SecondNumber;
    echo "The Subtraction of Two number $FirstNumber and $SecondNumber is : ".$Total."<br>";
}function Multiplication($FirstNumber,$SecondNumber){
    $Total = $FirstNumber * $SecondNumber;
    echo "The ultiplication of Two number $FirstNumber and $SecondNumber is : ".$Total."<br>";
}function Division($FirstNumber,$SecondNumber){
    $Total = $FirstNumber / $SecondNumber;
    echo "The Division of Two number $FirstNumber and $SecondNumber is : ".$Total."<br>";
}

$x = 42;
$y = 23;
Addition($x,$y);
Subtraction($x,$y);
Multiplication($x,$y);
Division($x,$y);
?>
<?php
//---Continue and break statement---
for($num=1;$num<=10;$num++){
    if($num==3){
        continue;
    }elseif($num==9){
        break;
    }else{
        echo $num;
    }
}
?>
<?php
//----Array---
$name = ["Sushant khadka","Sushil Kathayat","Sabin Chaulagain"];
for($loop=0;$loop<3;$loop++){
    echo $name[$loop]."<br>";
}
?>

<?php
//----Multidimensional Array---
$data = [
    [1,"Sushant Khadka","Balkumari"],
    [2,"Sushil Kathayat","Patan"],
    [3,"Sabin Chaulagain","Boudha"]
]
?>










