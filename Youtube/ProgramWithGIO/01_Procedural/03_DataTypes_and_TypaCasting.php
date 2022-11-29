<?php
declare(strict_types=1);
/* Data types and type casting */
// https://www.phptutorial.net/php-tutorial/php-data-types/
// https://www.php.net/manual/en/language.types.type-juggling.php
// https://www.php.net/manual/en/types.comparisons.php

# 4 Scalar Types
    # bool : true / false
    $completed = true;
    $falseWillNotShow = false; # because false convert to empty string
    # int : -n 0 +n
    $score = 75;
    # float -n.m  0.0005 n.m
    $price = 23.5;
    # string: 'Name' or "Name" or "53"
    $greetings = 'Hello world';

echo $completed . '<br />';
echo gettype($completed) . '<br />';
var_dump($completed);
echo $falseWillNotShow . '<br />';
echo gettype($falseWillNotShow) . '<br>';
echo var_dump($falseWillNotShow) . '<br>';
echo $score . '<br />';
echo gettype($score) . '<br />';
var_dump($score);
echo $price . '<br />';
echo gettype($price) . '<br />';
var_dump($price);
echo $greetings . '<br />';
echo gettype($greetings) . '<br />';
echo var_dump($greetings) . '<br />';

# 4 Compound Types
    # array : series of variable
    $companies = ['a', 13, true, 12.2 ];
    print_r($companies);
    # object
    # callable
    # iterable

# 2 special types
    # resource
    # null : no data


function sum ($x, $y){
    echo "<br>";
    var_dump($x, $y);
    return $x*$y;
}
echo sum(5,6); #both consider as int
echo sum('5', 3); # string and int but string converts to integer this is called type juggling or type coercion

function sum2(int $x ,int $y){
    echo "<br>";
    $x = 5.5; # here it converted to float while it was integer
    var_dump($x, $y);
    return $x*$y;
}
echo sum2 (10,5); #out put is 27.5

// type casting
$x = (int)'5';
echo "<br>";
var_dump($x);