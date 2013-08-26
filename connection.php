<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ereport";

$connect = mysql_connect($dbhost, $dbuser, $dbpass);

mysql_select_db($dbname);
?>