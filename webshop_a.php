 <?php 
session_start();

$login_session=$_SESSION['login_admin'];
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Webshop</title>
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
						<h1>Webshop-INSY Projekt</h1>
						<p>Gent Taipi | Joan Rrushi</p>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							
							<li><a href="#first">Produkte einfugen</a></li>
							<li><a href="#second">Produkte editieren</a></li>
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
								
									
							</section>

						<!-- Second Section -->
							<section id="second" class="main special">
								<header class="major">
									<h2>Produkte editieren</h2>
								</header>
								
									
							</section>

					

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
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>