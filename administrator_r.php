<!DOCTYPE HTML>

<html>
	<head>
		<title>Administrator Registrieren</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>Administrator Registrieren</h1>
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
								<h2>Administrator Registrieren</h2>
								<form action="administrator_r.php" method="post">
					Vorname: <br> <input type="text" size="40" maxlength="250" name="vorname"><br><br>
					Nachname: <br> <input type="text" size="40" maxlength="250" name="nachname"><br><br>
					Email: <br> <input type="text" size="40" maxlength="250" name="email"><br><br>
					Geburtstag: <br> <input type="text" size="40" maxlength="250" name="geburtstag"><br><br>
					Telefonnummer: <br> <input type="text" size="40" maxlength="250" name="telefonnummer"><br><br>
					Benutzername: <br> <input type="text" size="40" maxlength="250" name="benutzername"><br><br>
					Passwort:<br> <input type="password" size="40"  maxlength="250" name="passwort"><br>
					<button name="Send" type="submit">Abschicken</button>
					<button name="Reset" type="reset">Reset</button>
					
				</form>
			<?php 
			if(isset($_POST["Send"])){
				$pdo = new PDO('mysql:host=localhost;port=3306;dbname=webshop', 'root', '');
				$vorname = $_POST["vorname"];
				$nachname = $_POST["nachname"];
				$email = $_POST["email"];
				$geburtstag = $_POST["geburtstag"];
				$telefonnummer = $_POST["telefonnummer"];
				$benutzername = $_POST["benutzername"];
				$passwort = $_POST["passwort"];
			
				$insert = "INSERT INTO administrator (Vorname, Nachname, Email, Geburtstag, Telefonnummer, benutzername, passwort)
							VALUES('".$vorname."','".$nachname."','".$email."','".$geburtstag."','".$telefonnummer."','".$benutzername."','".$passwort."')";
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