 <?php 
session_start();

if(isset($_SESSION['login_kunde'])) {

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Webshop-Kunde</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>Webshop-Kunde</h1>
						<p>Webshop-Kunde</p>
					</header>
					<!-- Nav -->
					<nav id="nav">
						
							<ul class="actions vertical small">						
							<li><a href="logout.php" class="button special small">Logout</a></li>
							</ul>
						
					</nav>
				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<span class="image main"><img src="images/webshop.jpg" alt="" /></span>
							</section>
						<h2> Produkte bestellen </h2>
							<div class="table-wrapper">
							
										
											<table class="alt">
											
												<thead>
													<tr>
														<th>ID</th>
														<th>Produkt_Name</th>
														<th>Mekmale</th>
														<th>Gewicht</th>
														<th>Preis</th>
														<th>Kategorie-Name</th>
														<th>Bestellen</th>
														
													</tr>
												</thead>
												<tbody>
													<?php
			/*Verbindung mit der DB*/
			$pdo = new PDO('mysql:host=localhost;dbname=webshop', 'root', '');
			/*Select Statement*/
			$select = "SELECT idProdukt, Produkt_Name, Merkmale, Preis, Gewicht, Kategorie_Name FROM vprodukt ORDER BY idProdukt";
			/*Prepare Statement aus Sicherheit-Gruende*/
			$sth = $pdo->prepare($select);
			/*Durchfuehrung von Select-Statement*/
			$sth->execute();
			/*Die Ergebnisse werden als ASSOC-Array aufgelistet*/
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			
				//echo "<table>";	
			foreach($result as $row) {
			
				echo "<tr>";
				echo "<td>" . $row["idProdukt"] . "</td>";
				echo "<td>"	. $row["Produkt_Name"] . "</td>";
				echo "<td>" . $row["Merkmale"] . "</td>";
				echo "<td>" . $row["Gewicht"] . "</td>";
				echo "<td>" . $row["Preis"] . "</td>";
				echo "<td>" . $row["Kategorie_Name"] . "</td>";
				
				
			

				echo "</tr>";
			
			}
			
			//echo "</table>"
		?>
			</tbody>
		</table>
						
			
					

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<h2>Webshop</h2>
							<p>Unsere Webshop hat verschiedene Produkte in verschiedene Kategorien.</p>
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
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php		
} else {
	/*Wenn man nicht eigeloggt ist, kann er nur "login_a.php" Seite sehen*/
	header("Location: login_k.php");
}
?>
