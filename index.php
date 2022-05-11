<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Part</title>
</head>

<body>
    <?php
    //---Comparing the string
    $fname = "41Sushant";
    $sname = "21sushant";
    echo strncmp($fname, $sname, 3); //--compare the first three character
    echo "<br>";
    echo strcasecmp($fname, $sname); //--compare with each other
    echo "<br>" . strnatcmp($fname, $sname); //--compare the natural number
    ?>
    <?php
    //---Reversing thee word in php
    $fname = "sushant";
    echo "<br>" . strrev($fname); //--reversing the word 
    echo "<br>" . str_shuffle($fname); //-- Suffle the word into the random order
    ?>
    <?php
    //--Giving the padding into the word
    // used for making the hasing algorithm
    $fname = "sushant";
    $length = 100;
    $sign = "_";
    echo str_pad($fname, 30, "."); //---gives the padding of 30 character into the previouis word
    echo "<br>" . str_pad($fname, 30, "!@#$%^&", STR_PAD_BOTH); //--gives the padding from both side equally
    echo "<br>" . str_repeat($sign, $length); //-Helps to repeat the same value into the given times
    ?>
    <?php
    //--Trimming function in php 
    //-- helps to trip the given word from the both side
    $fname = "sushant";
    echo "<br>" . trim($fname, "st"); //--trim the character between s and t
    $sname = "   sushant      ";
    echo "<br>" . $sname;
    echo "<br>" . trim($sname); //ttrim the blank space from both side
    ?>
    <?php
    //---adding the slacess into the word
    /// adding the slacces / into the word
    $str = "my name is 'sushant'";
    echo "<br>" . $str;
    echo "<br>" . addslashes($str); //--adding the slacess before court
    $new = addslashes($str);
    echo "<br>" . $new;
    echo "<br>" . stripslashes($new); // removing thw slacess from the word

    //Adding the custom slacess
    $str = "my name is 'sushant'";
    $new = addcslashes($str, "a...z"); //--> adding the slacess from the range
    echo "<br>" . $new;
    $snew = stripslashes($new); //--Removing all the slacess from the word
    echo "<br>" . $snew;
    ?>
</body>

</html>