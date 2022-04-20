<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP</title>
</head>

<body>
    <?php
    echo "Hellow world</br>";
    echo "second line";

    //----Variable in Php----
    $A = "First Variable<br>";
    $Num = 2345;
    echo $A;
    echo $Num;
    echo "<h1>" . $A . "</h1>";

    //---Sum of two  number---
    $Number1 = 12;
    $Number2 = 4;
    $Sum = $Number1 + $Number2;
    $Sub = $Number1 - $Number2;
    echo "The Addition of Two number is : " . $Sum . "<br>";
    echo "The Subtraction of Two number is : " . $Sub . "<br>";

    //---Condition in PHP------
    $num = 15;
    if ($num < 10) {
        echo "You are a child.<br> ";
    } elseif ($num == 10) {
        echo "Your are only 10.";
    } elseif ($num <= 15) {
        echo "You are Marad<br>";
    }

    //----Switch case in PHP----
    $weekDay = 5;

    switch ($weekDay) {
        case 1: {
                echo "Sunday";
                break;
            }
        case 2: {
                echo "Monday";
                break;
            }
        case 3: {
                echo "Tuesday";
                break;
            }
        case 4: {
                echo "Wednesday";
                break;
            }
        case 5: {
                echo "Thursday";
                break;
            }
        case 6: {
                echo "Friday";
                break;
            }
        case 7: {
                echo "Saturday";
                break;
            }
        default: {
                echo "wrong Input";
                break;
            }
    }

    //---String concatination----
    $FirstName = "<br>Sushant";
    $LastName = "Khadka";
    $FullName = $FirstName . " " . $LastName . "<br>";
    echo $FullName;

    //---while Loop in Php--
    $i = 1;
    while ($i <= 10) {
        echo "Hellow world<br>";
        $i = $i + 1;
    }

    //---Do while loop--
    $i = 0;
    do {
        echo "Hellow world<br>";
        $i = $i + 1;
    } while ($i <= 10)
    ?>

    <?php
    //---For loop--
    for ($a = 1; $a <= 10; $a++) {
        echo $a . "<br>";
    }
    ?>

    <?php
    //---Nested Loop---
    for ($num = 1; $num <= 100;) {
        for ($secondNumber = $num; $secondNumber < $num + 10; $secondNumber++) {
            echo $secondNumber . " ";
        }
        echo "<br>";
        $num = $num + 10;
    }
    ?>
    <?php
    //---Creating function---
    function Addition($FirstNumber, $SecondNumber)
    {
        $Total = $FirstNumber + $SecondNumber;
        echo "The Addition of Two number $FirstNumber and $SecondNumber is : " . $Total . "<br>";
    }
    function Subtraction($FirstNumber, $SecondNumber)
    {
        $Total = $FirstNumber - $SecondNumber;
        echo "The Subtraction of Two number $FirstNumber and $SecondNumber is : " . $Total . "<br>";
    }
    function Multiplication($FirstNumber, $SecondNumber)
    {
        $Total = $FirstNumber * $SecondNumber;
        echo "The ultiplication of Two number $FirstNumber and $SecondNumber is : " . $Total . "<br>";
    }
    function Division($FirstNumber, $SecondNumber)
    {
        $Total = $FirstNumber / $SecondNumber;
        echo "The Division of Two number $FirstNumber and $SecondNumber is : " . $Total . "<br>";
    }

    $x = 42;
    $y = 23;
    Addition($x, $y);
    Subtraction($x, $y);
    Multiplication($x, $y);
    Division($x, $y);
    ?>
    <?php
    //---Continue and break statement---
    for ($num = 1; $num <= 10; $num++) {
        if ($num == 3) {
            continue;
        } elseif ($num == 9) {
            break;
        } else {
            echo $num;
        }
    }
    ?>
    <?php
    // ----Array---
    $Name = ["Sushant khadka", "Sushil Kathayat", "Sabin Chaulagain"];
    for ($loop = 0; $loop < 3; $loop++) {
        echo $Name[$loop] . "<br>";
    };
    ?>

    <?php
    //----Multidimensional Array---
    $data = [
        [1, "Sushant Khadka", "Balkumari", 9865758933],
        [2, "Sushil Kathayat", "Patan", 9821644926],
        [3, "Sabin Chaulagain", "Boudha", 9725648914]
    ];
    echo "<table border='1px' cellspacing=0px' cellpadding='13px'>";
    echo "<tr>
<th>S.N</th>
<th>NAME</th>
<th>ADRESS</th>
<th>PHONE</th>
</tr>";
    for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 4; $j++) {
            echo "<td>" . $data[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>"
    ?>
    <?php
    //---Working with multidimensional array with the help of foreach loop---
    $data = [
        [1, "Sushant Khadka", "Balkumari", 9865758933],
        [2, "Sushil Kathayat", "Patan", 9821644926],
        [3, "Sabin Chaulagain", "Boudha", 9725648914],
        [4, "Sabin Chaulagain", "Boudha", 9725648914]
    ];
    echo "<table border='1px' cellpadding='16px'cellspacing='0px'>";
    echo "<tr>
<th>S.N</th>
<th>Full Name</th>
<th>Adress</th>
<th>Phone Number</th>";
    foreach ($data as list($a, $b, $c, $d)) {
        echo "<tr>";
        echo "<td>$a</td> <td>$b</td> <td>$c</td> <td>$d</td>" . "<br>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <?php
    //---Working with multidimensional array with the help of foreach loop---
    $data = [
        [
            "S.N" => 1,
            "NAME" => "Sushant Khadka",
            "ADRESS" => "Balkumari",
            "PHONE" => 9865758933
        ],
        [
            "S.N" => 2,
            "NAME" => "Sushil Kathayat",
            "ADRESS" => "Patan",
            "PHONE" => 9821644926
        ],
        [
            "S.N" => 3,
            "NAME" => "Sabin Chaulagain",
            "ADRESS" => "Boudha", "PHONE" => 9725648914
        ],
        [
            "S.N" => 4,
            "NAME" => "Sabin Chaulagain",
            "ADRESS" => "Boudha",
            "PHONE" => 9725648914
        ]
    ];
    echo "<table border='1px' cellpadding='16px'cellspacing='0px'>";
    echo "<tr>
<th>S.N</th>
<th>Full Name</th>
<th>Adress</th>
<th>Phone Number</th>";
    foreach ($data as list("S.N" => $a, "NAME" => $b, "ADRESS" => $c, "PHONE" => $d)) {
        echo "<tr>";
        echo "<td>$a</td> <td>$b</td> <td>$c</td> <td>$d</td>" . "<br>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <?php
    //---Count() and sozeof() function --
    $data = [
        [
            "S.N" => 1,
            "NAME" => "Sushant Khadka",
            "ADRESS" => "Balkumari",
            "PHONE" => 9865758933
        ],
        [
            "S.N" => 2,
            "NAME" => "Sushil Kathayat",
            "ADRESS" => "Patan",
            "PHONE" => 9821644926
        ],
        [
            "S.N" => 3,
            "NAME" => "Sabin Chaulagain",
            "ADRESS" => "Boudha", "PHONE" => 9725648914
        ],
        [
            "S.N" => 4,
            "NAME" => "Sabin Chaulagain",
            "ADRESS" => "Boudha",
            "PHONE" => 9725648914
        ]
    ];
    echo "Total size of the Array : ";
    echo count($data);
    echo "<br>" . "Total Size of the element of the array : ";
    echo sizeof($data, 1);

    ?>
    <?php
    //---Searching the value in PhP using in_array() and Array_search()- function--
    //----- in_search() function helps to find the element into the given array--
    $data = [1, "Sushant Khadka", "Balkumari", 9865758933];
    if (in_array('Sushant Khadka', $data)) {
        echo "<br><br>Found Sucessfully";
    } else {
        echo "Cannot found";
    }

//-----Array_search() function helps to find the location or position of the element of the given array--
$data = [1, "Sushant Khadka", "Balkumari", 9865758933];
echo "<br>"."The Number of Element is : ";
echo array_search("Sushant Khadka",$data);
?>

<?php

?>





</body>

</html>