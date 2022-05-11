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
    <?php
    //--Save from Sql injection
    //--Htmlentities helps to convert the html tag into its corresponding value
    $link = '<a href="https://www.instagram.com/">Click here</a>';
    $newlink = htmlentities($link); //--convert any kind of script into the plain text
    echo $newlink;
    $secondlink = html_entity_decode($newlink); // Decoding the word
    echo $secondlink;
    ?>
    <?php
    //-->Password Hassing algorithms
    // ------------md5 hassing algorithms
    // --> it gives only 32 cgaracter after hasing
    $str1 = " ksdjksdjksjdksjdjskdjksjdkj";
    echo "<br>";
    $newstr = md5($str1); //--incodee into the hexa value by md5
    echo "<br>" . $newstr;
    $newstr = md5($str1, true); //--incodee into the Binary value value
    echo "<br>" . $newstr;
    $newstr = sha1($str1); //--incodee into the hexa value by sha1
    echo "<br>" . $newstr;
    $newstr = sha1($str1, true); //--incodee into the Binary value value
    echo "<br>" . $newstr;
    ?>
    <?php
    $meroMessage = "Instagram[a] is an American photo and video sharing social networking service founded in 2010 by Kevin Systrom and Mike Krieger, and later acquired by Facebook Inc.. The app allows users to upload media that can be edited with filters and organized by hashtags and geographical tagging. Posts can be shared publicly or with preapproved followers. Users can browse other users' content by tag and location, view trending content, like photos, and follow other users to add their content to a personal feed.[10]";
    echo "<br><br>" . $meroMessage;
    $AffterIncode = convert_uuencode($meroMessage); //--> Incode all the message
    echo "<br><br>" . $AffterIncode;
    echo "<br><br>" . convert_uudecode($AffterIncode); //--> Decode all the message
    ?>
    <?php
    $name = "hah";
    echo bin2hex($name);
    echo hex2bin(bin2hex($name));
    ?>
    <?php
    $name = 89;
    echo chr($name); //---convert ascii value into character
    echo ord($name); // convert character into ascii vakue
    ?>
    <?php
    //---word wrap
    $meroMessage = "Instagram[a] is an American photo and video sharing social networking service founded in 2010 by Kevin Systrom and Mike Krieger, and later acquired by Facebook Inc.. The app allows users to upload media that can be edited with filters and organized by hashtags and geographical tagging. Posts can be shared publicly or with preapproved followers. Users can browse other users' content by tag and location, view trending content, like photos, and follow other users to add their content to a personal feed.<br></br>";
    // echo wordwrap($meroMessage,4,"<br>");//--breeak when space comes
    echo wordwrap($meroMessage, 4, "<br>", true); //--break after 4 character
    ?>
    <?php
    //---Working with math function
    /*
    1. abs()-- Gives always the positive value(-5.5)-->5.5
    2. floor()-- Gives the floor value(4.3,4.5)--> 4
    3. ceil()-- Gives the upper value(4.6,4,2)--> 5
    4. round()--> Gives the upper value(4.2,4.7)--> 4 and 5
    */
    ?>
    <?php
    //--creating the random number 
    echo rand(1, 34);
    echo "<br>";
    echo mt_rand(1, 34);
    ?>
    <?php
    //date and time function
    /*
    DATE(format)
    A. Day
        1. d =(01 to 31)
        2. j = (1 to 31)
        3. S =(st,nd or th)
    B. Month
        1. F = (january)
        2. m = (01)
        3. M = (jan)
        4. n = (1)
    C. Year
        1. Y = (2022)
        2. y = (22)
    D. Week
        1. D = (mon)
        2. l = (monday)
        3. N = (1)
        4. W = (1)
    */
    /*
    A. Hour
        1. h = (01 to 12)
        2. H = (00 to 12)
        3. g = (1 to 12)
        4. G = (0 to 23)
    B. Minutes
     1. i = (00 to 59)
    C. Seconds
        1. s = (00 to 59)
    D. Meeridian
     1.a =(am or pm)
     2. A = (AM or PM)
    */
    $date = date("j") . date("S") . " " . date("M") . " " . date("Y");
    echo $date;
    ?>
    <?php

    ?>
</body>

</html>