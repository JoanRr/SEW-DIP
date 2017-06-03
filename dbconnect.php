<?php
/*Erstellung der Verbindung mit der DB*/
/*Benutzername, Passwort und Hostname werden in unterschiedliche Variableb gespeichert*/
$hostname='localhost';
$user = 'root';
$password = '';
$mysql_database = 'webshop';
/*Die Methode "mysql_connect" wird auf die db-Variable gespeichert*/
$db = mysql_connect($hostname, $user, $password,$mysql_database);
mysql_select_db("webshop", $db);
?>
