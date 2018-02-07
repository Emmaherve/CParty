<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document sans titre</title>
</head>

<body>
<?php 
	
	
	session_start();
$_SESSION["username"]=$_POST["username"];
$_SESSION["password"]=$_POST["password"];
 
/*try {include('connexionBdd.php');}
catch (Exception $e) {die("L'accès à la base de donnée est impossible.");}*/
 include('connexionBdd.php');
if (empty($_SESSION["username"]) or empty($_SESSION['password'])) {
    echo "veuillez saisir un login et un mot de passe";
}
else {
    $connexion = query("SELECT COUNT(*) FROM client WHERE emailClient='".$_SESSION["username"]."' AND mdpClient='".$_SESSION["password"]."'")->fetch();
    if ($connexion['COUNT(*)'] == 1)
        header("Location: index_home.php");
}
/* echo "<script type='text/javascript'>document.location.replace('index_home.php');</script>";*/

  

	
?>	
</body>
</html>