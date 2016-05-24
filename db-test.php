<?php

$dbuser = 'wp';
$dbpass = 'wp';
$dbhost = 'my-mysql';

$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");

echo "Connected to DB!";
