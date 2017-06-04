
<!DOCTYPE HTML>
<html>
	<head>
		<title>Administrator Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>Administrator Login</h1>
						
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
								

							<form action="login_a.php" method="post">
					Benutzername: <br> <input type="text" size="40" maxlength="40" name="benutzername"><br><br>
					Dein Passwort:<br> <input type="password" size="40"  maxlength="40" name="passwort"><br>
					<input type="submit" value="Abschicken" name="sub">
					<input type="reset" value="Reset" name="reset">
				</form>

<?php
		if(isset($_POST['sub'])) {
			include("dbconnect.php");
			session_start();

$benutzername=$_POST['benutzername'];
$passwort=$_POST['passwort'];

$_SESSION['login_admin']=$benutzername;
 
$query = mysql_query("SELECT benutzername FROM administrator WHERE benutzername='$benutzername' and passwort='$passwort'");

 if (mysql_num_rows($query) != 0)
{

 echo "<script language='javascript' type='text/javascript'> location.href='webshop_a.php' </script>";	
  }

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