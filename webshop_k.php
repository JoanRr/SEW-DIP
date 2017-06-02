 <?php 
session_start();

$login_session=$_SESSION['login_kunde'];
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