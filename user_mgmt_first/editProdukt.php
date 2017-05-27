<!doctype html>
<html>
	<head>
		<title>Fahrzeug bearbeiten</title>
	</head>
	<body>
		<h3>Fahrzeug bearbeiten</h3>
		
		<?php
			
			if(isset($_GET["id"])) {
				$pdo = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
			
				$sql = "SELECT idProdukt, Name, Merkmale, Preis, Gewicht FROM produkt WHERE idProdukt = " . $_GET["id"];
				$result = $pdo->query($sql);
				$row = $result->fetch();
			}
			
		?>
		
		<form action="editProdukt.php" method="post">
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="Name" value="<?php echo $row["Name"]; ?>" maxlength="50" /></td>
				</tr>
				<tr>
					<td>Merkmale</td>
					<td><input type="text" name="Merkmale" value="<?php echo $row["Merkmale"]; ?>" maxlength="50" /></td>
				</tr>
				<tr>
					<td>Preis</td>	
					<td><input type="text" name="Preis" value="<?php echo $row["Preis"]; ?>" maxlength="50" /></td>
				</tr>
				<tr>
					<td>Gewicht</td>
					<td><input type="text" name="Kennzeichen" value="<?php echo $row["Gewicht"]; ?>" maxlength="50" /></td>
				</tr>
			</table>
			
			<input type="hidden" name="idProdukt" value="<?php echo $row["idProdukt"]; ?>" />
			<button name="Send" type="submit">&Auml;ndern</button>

		</form>
		
		<?php
		
			if(isset($_POST["Send"])) {
				
				$pdo = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
				
				$sql = "UPDATE produkt SET Name = '" . $_POST["Name"]
					. "', Merkmale = '" . $_POST["Merkmale"]
					. "', Preis = " . $_POST["Preis"]
					. ", Gewicht = " . $_POST["Gewicht"] 
					." WHERE idProdukt=" . $_POST["idProdukt"] ;
				
				echo $sql;
				$result = $pdo->query($sql);
				
				if($result)
					header("location:viewProdukt.php");
					
				else
					echo "Das Produkt wurde nicht ge&auml;ndert!<br />" . $sql;
				
			}
		
		?>
	</body>
</html>