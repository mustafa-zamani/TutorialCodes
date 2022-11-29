<?php

/* integer */

echo PHP_INT_MAX;
echo '<br>';
echo PHP_INT_MIN;

$x = 5;
echo $x . '<br>';

$x = 0x2A; #hexa decimal
echo $x . '<br>';

$x = 055; #Octal number result 45
echo $x . '<br>';

$x = 0b11; #binary
echo $x . '<br>';

// casting

$x = PHP_INT_MAX +1;
var_dump((int)$x);
echo '<br>';

$x = (int) true; #result is 1
echo $x . '<br>';


$x = (int) false; #result is 0
echo $x . '<br>';


$x = (int) 5.98; #result is 5
echo $x . '<br>';


$x = (int) '5.9'; #result is 5
echo $x . '<br>';


$x = (int) '87test'; #result is 87
echo $x . '<br>';

$x = (int) 'test'; #result is 0
echo $x . '<br>';

var_dump(is_int($x));
echo $x .'<br>';

$x = 20_000_000; # if '20_000_000' result '20_000_000' if (int)'20_000_000' result is 2
echo $x .'<br>';

