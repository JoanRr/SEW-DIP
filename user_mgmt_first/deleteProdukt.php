<?php
		
			$pdo = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
			
	$sql = "DELETE FROM produkt WHERE idProdukt = " . $_GET["id"];
				
	$sth = $pdo->prepare($sql);
	$sth->execute();
header("location:viewProdukt.php");
		?>