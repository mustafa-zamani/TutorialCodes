<?php
/* floats */
$a = 10.2;
$b = 13.5e3; #result is 13500
$c = 13_000.5e3; #for readability

echo PHP_FLOAT_MAX . '<br>';
echo PHP_FLOAT_MIN . '<br>';

$d = floor((0.1 + 0.7) * 10 ); #result is not 8 because binary representation
echo $d . '<br>';

$e = ceil( (0.1 + 0.2) * 10 ); #result is 4
echo $e . '<br>';
# for more information check here
# https://floating-point-gui.de/

$e = ceil( (0.1 + 0.7) * 10 ); #result is as expected
echo $e . '<br>';

# it is a good idea if you don't do equality comparison with floating number

$f = 0.23;
$g = 1 - 0.77;
var_dump($f, $g);
echo '<br>';
if ($f === $g ) {
    echo "it is equal";
}else{
    echo "it is not equal";
}

echo NAN; # if result of some calculation can not be calculated like:
echo log(-1);

echo INF;
echo PHP_FLOAT_MAX *2; #i s infinity don't compare values against INF instead use the following
$h = PHP_FLOAT_MAX * 2;
var_dump(is_finite($h));
echo '<br>';
var_dump(is_infinite($h));
echo '<br>';
var_dump(is_nan($h));
echo '<br>';
var_dump(is_nan(log(-1)));
echo '<br>';

$i = 5;
var_dump((float) $i);

$j = '15.5adfa'; # result is 15.5
var_dump((float) $i);

$k = 'this variable will be zero';
var_dump((float) $i);