<?php
use DateTime;
use DateTimeZone;
$date = new DateTime("now",new DateTimeZone("Europe/Amsterdam"));
echo "<pre>";
print_r($date);
echo "<pre>";