<?php
/*Die Session wird beendet und es geht weiter zu "index.php"*/
session_start();
if(session_destroy())
{
header("Location: index.php");
}
?>
