<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Deco Cparty</title>
</head>

<body>
	
		
<?php
 // Il faut détruire la séssion en cours 
	session_start();
	session_unset();
	session_destroy();
	header('Location: connexion.php');
 
	exit();
         
?>
</body>
</html>