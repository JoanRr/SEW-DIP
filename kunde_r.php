<!DOCTYPE HTML>

<html>
	<head>
		<title>Kunde Registrieren</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>Kunde Registrieren</h1>
						<p>Registrieren Sie bitte...</p>
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
								<h2>Kunde Registrieren</h2>
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