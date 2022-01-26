<?php

$text = $_REQUEST['usertext'];
$number = $_REQUEST['usernumber'];

echo "Person Name is $text || Person Number Is $number";


$serverInfo = $_SERVER;

echo "<pre>";
print_r($serverInfo);
echo "</pre>";
?>