<?php 
	
include('connexionBdd.php');
 
//Je choisis le champ login
$reponse_login = $connexion->query('SELECT * FROM client WHERE emailClient=\''.$_POST['username'].'\' AND mdpClient=\''.$_POST['password'].'\''); // Je choisis de la base de donné login le champ login
 

							 
							 
while ($donnees = $reponse_login->fetch())

{
   if($donnees !== false){
      
         header("location: index_home.php");
	   	
   }else{
    
echo"Votre email et/ou votre mot de passe sont incorrects";}}
	
$reponse_login->closeCursor(); 








/*while ($donnees = $reponse_login->fetch() AND $donees2 = $reponse_password->fetch()) // EDIT : Il n'y a plus d'erreur mais c'est à la ligne 20 maintenant
{
    if ($_POST['username'] == $donnees['emailClient'] AND $_POST['password'] == $donees2['mdpClient']) // ERREUR ICI
    {
        // La suite de mon code qui y sera après que je n'ai plus d'erreur et pour l'instant c'est :
        echo "<script type='text/javascript'>document.location.replace('index_home.php');</script>" ;
    }else{
		echo"Votre email et/ou votre mot de passe sont incorrects";
	}
}*/
	
?>


<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document sans titre</title>
</head>

</html>