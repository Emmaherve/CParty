<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document sans titre</title>
</head>

<body>
<?php 
	
	
	
	
	
session_start();
  
include('connexionBdd.php');
  
if(($_SESSION["email"] == "") or($_SESSION['mot_de_passe'] == "")) {
    echo "veuillez saisir un email et un mot de passe";
}
else {
    $st = $bdd->query("SELECT COUNT(*) FROM client WHERE emailClient='".$_SESSION["email"]."' AND mdpClient='".$_SESSION["mot_de_passe"]."'")->fetch();
    if ($st['COUNT(*)'] == 1)
        header("Location: index_home.php");
}
	
	
	
?>	
</body>
</html>