<?php
		
			$pdo = new PDO('mysql:host=localhost;dbname=webshop', 'root', '');
			
	$sql = "DELETE FROM kunde WHERE idKunde = " . $_GET["id"];
				
	$sth = $pdo->prepare($sql);
	$sth->execute();
header("location:delKunde.php");
		?>