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
    echo "<br>".strrev($fname); //--reversing the word 
    echo "<br>".str_shuffle($fname); //-- Suffle the word into the random order
    ?>
</body>

</html>