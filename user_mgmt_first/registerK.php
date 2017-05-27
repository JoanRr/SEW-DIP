<!DOCTYPE html> 
<html> 
	<head>
		<?php require('header.php'); ?>
		<div id="content">
			<title>Kunden Registrieren</title> 
	</head> 
<body>
	<?php require('menu.php'); ?>
		<div id="content">
			<h2>Kunden Registrieren</h2>
				<form action="registerK.php" method="post">
					Vorname: <br> <input type="text" size="40" maxlength="250" name="vorname"><br><br>
					Nachname: <br> <input type="text" size="40" maxlength="250" name="nachname"><br><br>
					Email: <br> <input type="text" size="40" maxlength="250" name="email"><br><br>
					Geburtstag: <br> <input type="text" size="40" maxlength="250" name="geburtstag"><br><br>
					HausNr: <br> <input type="text" size="40" maxlength="250" name="hausnr"><br><br>
					Land: <br> <input type="text" size="40" maxlength="250" name="land"><br><br>
					Stadt: <br> <input type="text" size="40" maxlength="250" name="stadt"><br><br>
					Strasse: <br> <input type="text" size="40" maxlength="250" name="strasse"><br><br>
					Telefonnummer: <br> <input type="text" size="40" maxlength="250" name="telefonnummer"><br><br>
					Benutzername: <br> <input type="text" size="40" maxlength="250" name="benutzername"><br><br>
					Passwort:<br> <input type="password" size="40"  maxlength="250" name="passwort"><br>
					<button name="Send" type="submit">Submit</button>
				</form>
			<?php 
			if(isset($_POST["Send"])){
				$pdo = new PDO('mysql:host=localhost;port=3306;dbname=mydb', 'root', '');
				$vorname = $_POST["vorname"];
				$nachname = $_POST["nachname"];
				$email = $_POST["email"];
				$geburtstag = $_POST["geburtstag"];
				$hausnr = $_POST["hausnr"];
				$land = $_POST["land"];
				$stadt = $_POST["stadt"];
				$strasse = $_POST["strasse"];
				$telefonnummer = $_POST["telefonnummer"];
				$benutzername = $_POST["benutzername"];
				$passwort = $_POST["passwort"];
			
				$insert = "INSERT INTO kunde (Vorname, Nachname, Email, Geburtstag, HausNr, Land, Stadt, Strasse, Telefonnummer, benutzername, passwort)
							VALUES('".$vorname."','".$nachname."','".$email."','".$geburtstag."','".$hausnr."','".$land."','".$stadt."','".$strasse."','".$telefonnummer."','".$benutzername."','".$passwort."')";
				$result = $pdo->query($insert);
			
				if($result)
					echo "<br />Der User wurde erfolgreich angelegt!";
			
				else
					echo "Der User wurde nicht angelegt!<br />";
										}
			?>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="https://www.google.al/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=boss+definition&*" target="_blank">[Joan Rrushi]</a>
			</p>
		</div>
	</div>
</body>
</html>