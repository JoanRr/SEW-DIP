<!doctype html>
<html>
	<head>
		<?php require('header.php'); ?>
		<div id="content">
			<title>Die Produkten</title> 
	</head> 
	<body>
	<?php require('menu.php'); ?>
		<div id="content">
		<h3>Unsere Produkten sind:</h3>

		<?php
		
			$pdo = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
			
			$select = "SELECT idProdukt, Name, Merkmale, Preis, Gewicht FROM produkt ORDER BY idProdukt";
				
			$sth = $pdo->prepare($select);
			$sth->execute();
				
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			
				echo "<table>";	
			foreach($result as $row) {
			
				echo "<tr>";
				echo "<td>" . $row["idProdukt"] . " " . $row["Name"] . "</td>";
				echo "<td>" . $row["Merkmale"] . " " . $row["Preis"] . "</td>";
				echo "<td>" . $row["Gewicht"] . "</td>";
				echo "<td><a href=editProdukt.php?id=" . $row["idProdukt"] . ">Edit</a></td>";
				echo "<td><a href=deleteProdukt.php?id=" . $row["idProdukt"] .">Delete</a></td>";
				echo "</tr>";
			
			}
			
			echo "</table>"
		?>
		
		</form>
	</body>
</html>