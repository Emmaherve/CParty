<!doctype html>
<html>
	<head>
	
		<meta charset="utf-8">
		<title>Apéro</title>
		
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
	</head>

	<body>
		
		<div class="aperomenu">
		
			<?php include "parts/header.php" ?>
			
			<?php $param_hote='localhost';// chemin vers le serveur
			$param_port='127.0.0.1';// port de connexion
			$param_nom_bd='cparty ';// nom de votre base de données
			$param_user='root';// nom d'utilisateur pour se connecter
			$param_mdp='';
			?>
			
			<div class="block-center">
				<div class="inner">
					
					<div class="arbo"> Home > Produits > Apéos et boissons </div>
					
					<div class="title">Apéros et boissons </div>
					
					<form action="formulaire.php" method="post"> 
  					<fieldset>
						<div class="tiltesearch">Affinez votre recherche</div>
						
						<select name="marque" id="marque">
							<option> marque </option>
							<option value="1">despe</option>
							<option value="2">heineken</option>
						</select>
						
						<select name="prix" id="prix">
							<option> prix </option>
							<option value="1">max 15€</option>
							<option value="2">Peut importe</option>
						</select>
						
						<select name="occasion" id="occasion">
							<option> occasion </option>
							<option value="1">oui</option>
							<option value="2">nan</option>
						</select>
						
					</fieldset>
					</form>
					
			</div>
				
			<?php include "parts/footer.php" ?>
			
		</div>
	
	</body>
	
</html>