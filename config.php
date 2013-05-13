<?php
$host = "localhost" //Database host
$user = "admin"; //Database user
$password = ""; //Database password
$table = "urlshortener"; //Database table to store data
$hashLength = 10;
//Connect to database
mysql_connect($host,$user,$password);
mysql_select_db($table);
?>