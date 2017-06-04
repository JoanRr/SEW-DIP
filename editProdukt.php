<!DOCTYPE HTML>

<html>
	<head>
		<title>Produkt-editieren</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>Produkt-editieren</h1>
						
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<span class="image main"><img src="images/webshop.jpg" alt="" /></span>
								<h2>Produkt-editieren</h2>
								<?php

			if(isset($_GET["id"])) {
				$pdo = new PDO('mysql:host=localhost;dbname=webshop', 'root', '');

				$sql = "SELECT idProdukt, Produkt_Name, Merkmale, Gewicht, Preis FROM produkt WHERE idProdukt = " . $_GET["id"];
				$result = $pdo->query($sql);
				$row = $result->fetch();
			}

		?>

		<form action="editProdukt.php" method="post">
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="Produkt_Name" value="<?php echo $row["Produkt_Name"]; ?>" maxlength="50" /></td>
				</tr>
				<tr>
					<td>Merkmale</td>
					<td><input type="text" name="Merkmale" value="<?php echo $row["Merkmale"]; ?>" maxlength="255" /></td>
				</tr>
				<tr>
					<td>Gewicht</td>
					<td><input type="text" name="Gewicht" value="<?php echo $row["Gewicht"]; ?>" maxlength="50" /></td>
				</tr>
				<tr>
					<td>Preis</td>
					<td><input type="text" name="Preis" value="<?php echo $row["Preis"]; ?>" maxlength="50" /></td>
				</tr>
			</table>

			<input type="hidden" name="idProdukt" value="<?php echo $row["idProdukt"]; ?>" />
			<button name="Send" type="submit">&Auml;ndern</button>
			

		</form>

		<?php

			if(isset($_POST["Send"])) {

				$pdo = new PDO('mysql:host=localhost;dbname=webshop', 'root', '');

				$sql = "UPDATE produkt SET Produkt_Name = '" . $_POST["Produkt_Name"]
					. "', Merkmale = '" . $_POST["Merkmale"]
					. "', Gewicht = " . $_POST["Gewicht"]
					. ", Preis = " . $_POST["Preis"]

					." WHERE idProdukt=" . $_POST["idProdukt"] ;

				echo $sql;
				$result = $pdo->query($sql);

				if($result)
					header("location:webshop_a.php");

				else
					echo "Das Produkt wurde nicht ge&auml;ndert!<br />" . $sql;

			}

		?>
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