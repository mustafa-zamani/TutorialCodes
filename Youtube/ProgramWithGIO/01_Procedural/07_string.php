<?php
$string1 = 'this is a single quote (string1) and can not use variable';
$string2 = "this is a double quote (string2) and can use variable inside";
echo "this is an output from ${string1}";
echo "this is an output from {$string2}";

$name = "Your name ";
$lastName = "and your last Name";
echo $name . $lastName . '<br />';

echo $name[0] . '<br />'; # first character  (Y)
echo $name[1] . '<br />'; # second character (o)
echo $name[-2] . '<br />'; #second character from the end (m)

$name[0] = 'T';
echo $name . '<br>'; # result is: Tour
$name[15] = 'I';
echo $name[15] . '<br>'; #result is only I, but it increased the length to 16 character
var_dump($name); # display all character in $name
echo '<br>';

// Heredoc
# https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
# with Heredoc you can have variable
# you can use for html document inside Heredoc
# you don't need to take care of single or double quotes
$text = <<<YOUR_IDENTIFIER
<div>
    <p>Hello World</p>
</div>

Line 1
Line 2
Line 3 here is your last name variable: $lastName \n
YOUR_IDENTIFIER;
echo nl2br($text) . '<br>';

$text2 = <<<YOUR_IDENTIFIER
hello world #this is 11 length
    hello world  # this is with 15 length but show with 1 space exist
YOUR_IDENTIFIER;
echo nl2br($text2) . '<br>';

// Nowdoc
# https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.nowdoc


$text3 = <<<'YOUR_IDENTIFIER'
Line 1
Line 2
Line 3
the content inside variable $lastName can't be shown \n
YOUR_IDENTIFIER;
echo nl2br($text3) . '<br>';

# useful links
# https://www.php.net/manual/en/ref.strings.php
# https://www.php.net/manual/en/language.types.string.php

# https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbTdDdFF2YVZWc2FOYVYzMkx0TXdlLXUyeExPZ3xBQ3Jtc0trTkl3VXNGTTRUU3N4V0psOGlxblNZc0tvOU1hbFdhdWJsaVdiLUR1YVR6UFFCRm5TNWNFc1ltVUNuVlN4amtEM0JnN3poQnM3anA4cmVvRjE1OEQzS2kyazJpRmpfRnNGRWVwaDF5SnNVazRzajRScw&q=https%3A%2F%2Fwww.php.net%2Fmanual%2Fen%2Flanguage.types.string.php%23language.types.string.syntax.heredoc&v=97LnEncGx2c