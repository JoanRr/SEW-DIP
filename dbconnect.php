<?php
$hostname='localhost';
$user = 'root';
$password = '';
$mysql_database = 'webshop';
$db = mysql_connect($hostname, $user, $password,$mysql_database);
mysql_select_db("webshop", $db);
?>
