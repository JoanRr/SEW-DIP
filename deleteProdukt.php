<?php
	/*Erstellung der Verbindung zur Datenbank*/
	$pdo = new PDO('mysql:host=localhost;dbname=webshop', 'root', '');
	/*Das Produkt, das eine bestimmte ID hat, wird geloescht*/
	$sql = "DELETE FROM produkt WHERE idProdukt = " . $_GET["id"];
	/*Prepare-Statment, versichert den Befehl*/
	$sth = $pdo->prepare($sql);
	/*Durchfuehrung von SQL-Befehl*/
	$sth->execute();
	/*Dann geht die Seite automatische zu "webshop_a"*/
	header("location:webshop_a.php");
		?>