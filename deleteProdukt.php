<?php
		
			$pdo = new PDO('mysql:host=localhost;dbname=webshop', 'root', '');
			
	$sql = "DELETE FROM produkt WHERE idProdukt = " . $_GET["id"];
				
	$sth = $pdo->prepare($sql);
	$sth->execute();
header("location:webshop_a.php");
		?>