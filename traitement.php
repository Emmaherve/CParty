<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>
	CParty</title>
</head>

<body>
	
<?php 

include('connexionBdd.php');
	
	
	
/* Inscription */	
	

	
	
	$nom = $_POST['nom_utilisateur'];
	$prenom = $_POST['prenom_utilisateur'];
	$email = $_POST['email'];
	$mdp = $_POST['mot_de_passe'];
	$mdp2 = $_POST['confirm_pass'];
	$adresse = $_POST['adresse_utilisateur'];
	$tel = $_POST['telephone_utilisateur'];
	$naissance = $_POST['naissance_utilisateur'];
	
	if(isset($nom) && isset($prenom) && isset($email) && isset($mdp) && isset($mdp2) && isset($adresse) && isset($tel) && isset($naissance)){
		
		if($nom!="" && $prenom!="" && $email!="" && $mdp!="" && $mdp2!="" && $adresse!="" && $tel!="" && $naissance!=""){
			
          if($mdp==$mdp2){
             
          
        $query = $connexion->prepare( 'INSERT INTO client (nomClient,prenomClient,emailClient,mdpClient,adresseClient,telClient,dateNaissanceClient) VALUES (:nom_utilisateur, :prenom_utilisateur, :email, :mot_de_passe, :adresse_utilisateur, :telephone_utilisateur, :naissance_utilisateur )' );
			  
        $query->bindValue(':nom_utilisateur', $_POST['nom_utilisateur'], PDO::PARAM_STR);
        $query->bindValue(':prenom_utilisateur', $_POST['prenom_utilisateur'], PDO::PARAM_STR);
        $query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $query->bindValue(':mot_de_passe', $_POST['mot_de_passe'], PDO::PARAM_STR);
        $query->bindValue(':adresse_utilisateur', $_POST['adresse_utilisateur'], PDO::PARAM_STR);
        $query->bindValue(':telephone_utilisateur', $_POST['telephone_utilisateur'], PDO::PARAM_INT);
        $query->bindValue(':naissance_utilisateur', $_POST['naissance_utilisateur'], PDO::PARAM_STR);
        $query->execute();
			  
							}else echo"les 2 password doivent etre identique";
         
  
						} else echo"Veuillez saisir tous les champs";
     
    				} else echo "erreur"
	

		
		
?>
	
</body>
</html>