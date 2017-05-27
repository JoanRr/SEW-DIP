<!DOCTYPE html>
<html>
 <head>
   <?php require('header.php'); 
session_start();
session_destroy();
   ?>
   
   
    <title>My First Website</title>
 </head>
 
<body>

<!-- webpage content goes here in the body -->
        <?php require('menu.php'); ?>
		<div id="content">
			<h1>Logout erfolgreich</h1>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="https://www.google.al/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=boss+definition&*" target="_blank">[Joan Rrushi]</a>
			</p>
		</div>
	</div>
</body>
</html>