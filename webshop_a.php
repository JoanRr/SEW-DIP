 <?php 
session_start();

if(isset($_SESSION['login_admin'])) {

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>webshop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="assets/css/main.css" />

	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="images/logo1.png" alt="" /></span>
						<h1>WEBSHOP</h1>
						<p>Gent Taipi | Joan Rrushi</p>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							
							<li><a href="#first">Produkte einf&uumlgen</a></li>
							<li><a href="#second">Produkte editieren</a></li>
							<li><a href="delKunde.php">Kunde l&ouml;schen</a></li>
							</ul>
							<ul class="actions vertical small">						
							<li><a href="logout.php" class="button special small">Logout</a></li>
							</ul>
						
					</nav>

				<!-- Main -->
					<div id="main">

						

						<!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
									<h2>Produkte einfugen</h2>
								</header>
								<form action="webshop_a.php" method="post">
			<table>
				<tr>
					<td>Produkt Name</td>
					<td><input type="text" name="produkt_name" maxlength="50" /></td>
				</tr>
				<tr>
					<td>Kategorie</td>
					<td><input type="text" name="Kategorie_id" list="kategorie" /></td>
						<datalist id="kategorie">
							<option value="1">Elektronik</option>
							<option value="2">Haushalt</option>
							<option value="3">Kleidungen</option>
							<option value="4">B&uuml;cher</option>
							
						</datalist>
						
						
				</tr>
				<tr>
					<td>Merkmale</td>
					<td><textarea name="merkmale" /></textarea></td>
				</tr>
				<tr>
					<td>Gewicht</td>
					<td><input type="text" name="gewicht" maxlength="50" /></td>
				</tr>
				<tr>
					<td>Preis</td>
					<td><input type="text" name="preis" maxlength="50" /></td>
				</tr>
				<tr>
					<td><button name="Reset" type="reset">Reset</button></td>
					<td><button name="Send" type="submit">Anlegen</button></td>
				</tr>
			</table>
			<?php 
			if(isset($_POST["Send"])){
				$pdo = new PDO('mysql:host=localhost;port=3306;dbname=webshop', 'root', '');
				$name = $_POST["produkt_name"];
				$kateg = $_POST["Kategorie_id"];
				$merkmale = $_POST["merkmale"];
				$gewicht = $_POST["gewicht"];
				$preis = $_POST["preis"];
				
				
				$insert = "INSERT INTO produkt (Produkt_Name, Merkmale, Gewicht, Preis, Kategorie_id)
							VALUES('".$name."','".$merkmale."','".$gewicht."','".$preis."','".$kateg."')";
				$result = $pdo->query($insert);
				
				if($result)
					echo "<br />Das Produkt wurde erfolgreich angelegt!";
			
				else
					echo "Das Produkt wurde nicht angelegt!<br />";
										}
			?>
		</form>
									
							</section>

						<!-- Second Section -->
							<section id="second" class="main special">
								<header class="major">
									<h2>Produkte editieren</h2>
									
								<table class="alt">
											
												<thead>
													<tr>
														<th>ID</th>
														<th>Produkt_Name</th>
														<th>Mekmale</th>
														<th>Gewicht</th>
														<th>Preis</th>
														<th>Kategorie-Name</th>
														<th>Edit</th>
														<th>Delete</th>
														
													</tr>
												</thead>
												<tbody>
													<?php
		
			$pdo = new PDO('mysql:host=localhost;dbname=webshop', 'root', '');
			
			$select = "SELECT idProdukt, Produkt_Name, Merkmale, Preis, Gewicht, Kategorie_Name FROM vprodukt ORDER BY idProdukt";
				
			$sth = $pdo->prepare($select);
			$sth->execute();
				
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
				echo "<td><a href=editProdukt.php?id=" . $row["idProdukt"] . ">Edit</a></td>";
				echo "<td><a href=deleteProdukt.php?id=" . $row["idProdukt"] .">Delete</a></td>";
			

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

<?php		
} else {
	header("Location: login_a.php");
}
?>