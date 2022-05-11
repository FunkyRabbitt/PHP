# PHP

PHP (PHP: Hypertext Preprocessor) is a scripting language that helps people make web pages more interactive by allowing them to do more intelligent, complex things. PHP code is run on the web server.

A website programmed with PHP can have pages that are password protected. A website with no programming cannot do this without other complex things. Standard PHP file extensions are: .php .php3 or .phtml, but a web server can be set up to use any extension.

Its structure was influenced by many languages like C, Perl, Java, C++, and even Python. It is considered to be free software by the Free Software Foundation.

# History
PHP was first created by Rasmus Lerdorf in 1995. It is now developed and improved by a large team of people. Its name at first stood for Personal Home Page, but it was later changed to PHP: Hypertext Preprocessor; using its old acronym in the new name.


## An example Hello World program:

    <?php
    echo "Hello, World!";
    ?>
    It is common to put PHP code inside a HTML document, for example:

    <!DOCTYPE html>
    <html>
      <head>
        <title>Hello World</title>
      </head>
      <body>
        <?php
    //-- array slicing
    // -- take the value and print in range-
    $Data = [1, "Sushant Khadka", "Balkumari", 9865758933];
    $newArray = array_slice($Data, 1, 2); //--positive range
    $WultaValue = array_slice($Data, -2, 2);  //--negative range
    $KhatamValue = array_slice($Data, -2, 2, true); //---printing the actual indexing pf the element of the array
    print_r($newArray);
    print_r($WultaValue);
    print_r($KhatamValue);
    ?>
      </body>
    </html>

