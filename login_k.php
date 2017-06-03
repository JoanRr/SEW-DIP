
<!DOCTYPE HTML>
<html>
	<head>
		<title>Kunde Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>Kunde Einloggen</h1>
						
					</header>
					<nav id="nav">
						<ul>
							<li><a href=index.php>Webshop</a></li>
							
						</ul>
					</nav>
				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<span class="image main"><img src="images/webshop.jpg" alt="" /></span>
								<h2>Loggen Sie ein bitte...</h2>
								
						<!-- Erstellung einer Formular fuer Kunde-Login -->
							<form action="login_k.php" method="post">
					Benutzername: <br> <input type="text" size="40" maxlength="40" name="benutzername"><br><br>
					Dein Passwort:<br> <input type="password" size="40"  maxlength="40" name="passwort"><br>
					<!-- Submit Button -->
					<input type="submit" value="Abschicken" name="sub">
					<!-- Reset Button -->
					<input type="reset" value="Reset" name="reset">
				</form>

<?php
/*Isset-Ueberprueft, ob eine Variable NULL ist oder nicht*/
		if(isset($_POST['sub'])) {
			/*Hier wird eine bestimmte File, dbconnect-File gebraucht, um die Verbindung herzustellen*/
			include("dbconnect.php");
			/*Session starten*/
			session_start();
/*Eingabe werden in Variable gespeichert*/
$benutzername=$_POST['benutzername'];
$passwort=$_POST['passwort'];

$_SESSION['login_kunde']=$benutzername;
 /*Select-Statement*/
$query = mysql_query("SELECT benutzername FROM kunde WHERE benutzername='$benutzername' and passwort='$passwort'");
/*Diese if-Verzweigung ueberprueft, ob die Formular-Felder leer sind oder nicht*/
 if (mysql_num_rows($query) != 0)
{
/*Wenn nicht, get es weiter zu webshop_k.php*/
 echo "<script language='javascript' type='text/javascript'> location.href='webshop_k.php' </script>";	
  }
/*Wenn ja, wird es 'Falsches Benutzername oder Passwort' angezeigt*/
  else
  {
echo "<script type='text/javascript'>alert('Falsches Benutzername oder Passwort')</script>";
}

}
	?>
							</section>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
