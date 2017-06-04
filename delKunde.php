<!DOCTYPE HTML>

<html>
	<head>
		<title>Kunde l&ouml;schen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>Kunde l&ouml;schen</h1>
						
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<span class="image main"><img src="images/webshop.jpg" alt="" /></span>
								<h2>Kunde l&ouml;schen</h2>
								<!-- Hier wird eine Tabelle erzeugt-->
								<table class="alt">
											
												<thead>
													<tr>
														<th>ID</th>
														<th>Vorname</th>
														<th>Nachname</th>
														<th>Email</th>
														<th>Geburtstag</th>
														<th>HausNr</th>
														<th>Land</th>
														<th>Stadt</th>
														<th>Strasse</th>
														<th>Delete</th>
														
													</tr>
												</thead>
												<tbody>
													<?php
			/*Verbindung zur Datenbank*/
			$pdo = new PDO('mysql:host=localhost;dbname=webshop', 'root', '');
			/*SELECT-Statement*/
			$select = "SELECT idKunde, Vorname, Nachname, Email, Geburtstag, HausNr, Land, Stadt, Strasse, Telefonnummer, benutzername, passwort FROM kunde ORDER BY idKunde";
			/*PDO und SQL-Befehl werden durchgefuehrt*/
			$sth = $pdo->prepare($select);
			/*Durchfuehrung von Select-Statement*/
			$sth->execute();
			/*Die Ergebnisse werden aufgelistet*/
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			
			//echo "<table>";						
			foreach($result as $row) {
			
				echo "<tr>";
				echo "<td>" . $row["idKunde"] . "</td>";
				echo "<td>"	. $row["Vorname"] . "</td>";
				echo "<td>" . $row["Nachname"] . "</td>";
				echo "<td>" . $row["Email"] . "</td>";
				echo "<td>" . $row["Geburtstag"] . "</td>";
				echo "<td>" . $row["HausNr"] . "</td>";
				echo "<td>" . $row["Land"] . "</td>";
				echo "<td>"	. $row["Stadt"] . "</td>";
				echo "<td>" . $row["Strasse"] . "</td>";
				/*Hier wird ein Link fuer loeschen von Datensaetze*/
				echo "<td><a href=deleteKunde.php?id=" . $row["idKunde"] .">Delete</a></td>";
				
			

				echo "</tr>";
			
			}
			
			//echo "</table>"
		?>
			</tbody>
		</table>

		
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<h2>webshop</h2>
							<p>Unsere webshop hat verschiedene Produkte in verschiedene Kategorien.</p>
							<ul class="actions">
								<li><a href="index.php" class="button">Mehr </a></li>
							</ul>
						</section>

						<p class="copyright">&copy; Gent Taipi | Joan Rrushi </p>
					</footer>

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