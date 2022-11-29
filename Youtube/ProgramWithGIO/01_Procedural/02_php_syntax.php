<?php
// https://www.phptutorial.net/php-tutorial/php-syntax/
// https://www.phptutorial.net/php-tutorial/php-variables/
// https://www.phptutorial.net/php-tutorial/php-constants/
// https://www.phptutorial.net/php-tutorial/php-comments/

// https://www.youtube.com/watch?v=HrtS-FkPBqk&list=PLr3d3QYzkw2xabQRUpcZ_IBk9W50M9pe-&index=3&ab_channel=ProgramWithGio

# if you are using pure php code don't close php tag
# if you are using with html it is necessary to close
# ; is highly needed in end of line but in last line it is not really necessary
# print and echo 
# print return 1
# echo doesn't
# is fine => echo print "this is a string";
# not fine => print echo "this is a string";
# print('this is a string');
# echo('this is a string');
# echo 'this' , ' ' , 'is a string'; # not possible with print();
# $this can't be a variable

# variables are assign by value
// $x = 1;
// $y = $x;
// $x = 3;

// echo $y; # output is 1

#variable assigne by reference 

// $x = 1;
// $y = &$x;
// $x = 3;

// echo $y; #output is 3

// with single qoutes variable is not useable 
// with double qoutes variable is usable
// dot (.) concatination is allowed

/* Example of php iside html tags
<!DOCTYPE html>
<html>
    <body>
        <h1>
            <?= "this is a string" ?>
        </h1>
        <p>
            <?php
                $x = 10;
                $y = 15;
                echo '<p>' . $x . ',' . $y .'</p>';
            ?>
        </p>
    </body>
</html>
*/
