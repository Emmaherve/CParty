<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inscription à CParty</title>
	
	<link rel="stylesheet" href="css/emma.css">
	
	<link rel="stylesheet" href="../vendors/bootstrap/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body>
	
		
	<script src="vendors/jquery/jquery.min.js"></script>
	<script src="vendors/popper/popper.min.js"></script>
	<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
	
<?php include('parts/header.php');?>

	
	
		
<!-- Formulaire inscription -->	
	

	
	
<div class="formIscription">		
<form method="post" action="traitement.php">
	<div class="titleInscription">Inscription</div>
	<fieldset>	
		
		
		<p>
			<label for="nom_utilisateur"> Nom </label>
			<input type="text" name="nom_utilisateur" id="nom_utilisateur" maxlength="32">
			
		</p>
		<p>
			<label for="prenom_utilisateur"> Prénom </label>
			<input type="text" name="prenom_utilisateur" id="prenom_utilisateur" maxlength="32">
			
		</p>		
		<p>
			<label for="naissance_utilisateur"> Date de naissance </label>
			<input type="date" name="naissance_utilisateur" id="naissance_utilisateur">
			
		</p>	
		<p>
			<label for="adresse_utilisateur"> Adresse postale </label>
			<input type="text" name="adresse_utilisateur" id="adresse_utilisateur">
			
		</p>
		
		<p>
			
			<label for="email"> E-mail </label>
			<input type="text" name="email" id="adresse_email" maxlength="128">
			
		</p>
		<p>
			<label for="pass"> Mot de passe </label>
			<input type="password" name="mot_de_passe" id="mot_de_passe" maxlength="40" >
		</p>
		<p>
			<label for="confirm_pass">Confirmation du mot de passe</label>
			<input type="password" id="confirm_pass" name="confirm_pass" maxlength="40" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
		</p>
		<p>
			<label for="telephone_utilisateur">Téléphone </label>
			<input type="tel" id="telephone_utilisateur" name="telephone_utilisateur" >
		</p>
			

		<p>
			<input type="submit" value="Let's go"/>
		</p>
	
	</fieldset>
</form>

	
<div class="dejaINscrit"> <p> You already have sign up ? <a href="connexion.php">Log in !</a></p></div>

</div>	
	
	
	
	
	
	
	
	
<?php	include('parts/footer.php');?>	
	
</body>
</html>