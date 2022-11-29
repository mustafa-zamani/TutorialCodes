<?php
/**
 * Booleans
 * values are true or false
 * cab be defined as lowercase and upperCase
 * following values are evaluates as false
 * int 0 , -0  = false
 * float 0.0 , -0.0 = false
 *  '' , "" = false
 *  [] = false
 *  null = false
 */

$isComplete = true;
$isFine = TRUE;

if($isComplete){
    // do this block
    echo 'success' . '<br>';
}else{
    // do this block
    echo 'failed';

}
echo $isComplete;
echo '<br>';
var_dump($isComplete);
echo '<br>';

$isComplete = false;
echo $isComplete;
echo '<br>';
var_dump((string) $isComplete);
echo '<br>';
var_dump(is_bool($isComplete));

$isComplete = 'false';
echo $isComplete; #it is true cause it is not an empty string