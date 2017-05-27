<!DOCTYPE html>
<?php 
   if(!isset($_SESSION)) 
   {
		session_start();
	}
   $pdo = new PDO('mysql:host=localhost;port=3306;dbname=sewpr1', 'root', '' );
   ?>
<html>
	<head>
		<?php require('header.php'); ?>
    <title>My First Website</title>
	
	</head>
 
	<body>

<!-- webpage content goes here in the body -->
			<div id="content">
		<?php require('menu.php'); ?>
				<h1>Secret Page</h1>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="https://www.google.al/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=boss+definition&*" target="_blank">[Joan Rrushi]</a>
			</p>
		</div>
	</div>
</body>
</html>