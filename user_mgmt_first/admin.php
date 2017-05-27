<!DOCTYPE html> 
<html> 
	<head>
		<?php require('header.php'); ?>
		<div id="content">
			<title>Admin only</title> 
	</head> 
<body>
	<?php require('menu.php'); ?>
		<div id="content">
	<?php 

$pdo = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
 
if(isset($_GET['login'])) {
 $benutzername = $_POST['benutzername'];
 $passwort = $_POST['passwort'];
 
 $statement = $pdo->prepare("SELECT * FROM kunde WHERE benutzername = :benutzername");
 $result = $statement->execute(array('benutzername' => $benutzername));
 $user = $statement->fetch();
 
 //Überprüfung des Passworts
 if ($user !== false && password_verify($passwort, $user['passwort'])) {
 $_SESSION['idKunde'] = $user['id'];
 die('Login erfolgreich. Weiter zu <a href="admin.php">internen Bereich</a>');
 } else {
 $errorMessage = "E-Mail oder Passwort war ungültig<br>";
 }
}
?>
			<h2>Login</h2>
				<form action="?login=1" method="post">
					Benutzername: <br> <input type="benutzername" size="40" maxlength="250" name="benutzername"><br><br>
					Dein Passwort:<br> <input type="password" size="40"  maxlength="250" name="passwort"><br>
					<input type="submit" value="Abschicken">
				</form>
			<p>
				Neu Hier--><a href="registerA.php" >Registrieren zuerst</a>
			</p>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="https://www.google.al/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=boss+definition&*" target="_blank">[Joan Rrushi]</a>
			</p>
		</div>
	</div>
</body>
</html>