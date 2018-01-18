<!doctype html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Atelier personnalisation</title>
	
	
	<link rel="stylesheet" href="css/emma.css">
	<link rel="stylesheet" href="css/style.css">
	
	
</head>

<body>

	<?php include('parts/header.php');?>
	
<!-------------------------------------------------------------------
		TOP
-------------------------------------------------------------------->
<div class="container_perso">

<div class="top_personnalisation">
	<h1> Atelier personnalisation </h1>
	<ul>
		<li><img src="images/pen.png" alt="pen"></li>
		<li><img src="images/tâche peinture.png" alt="tache_bleue"></li>
		<li><img src="images/ciseaux.png" alt="ciseaux"></li>
		<li><img src="images/paint.png" alt="paint"></li>
	</ul>
	
	
</div>
	
<!-------------------------------------------------------------------
		CONTENTS
-------------------------------------------------------------------->
	<div class="contents_perso">
		<div class="hautContents">
			<form method="post" action="index_personnalisation.php">
				<p> 
					<label for="taille"> Taille :</label>
					<input type="checkbox" name="Pichet" id="pichet"/> <img src="images/pichet.png" alt="pichet">
					<input type="checkbox" name="pinte" id="pinte"/><img src="images/pint.png" alt="pinte">
					<input type="checkbox" name="demi" id="demi"/><img src="images/demi.png" alt="demi">
					<input type="checkbox" name="shooter" id="shooter"/><img src="images/shootet.png" alt="demi">
				
				</p>
				<p> 
					<label for="couleur"> Couleur :</label>
					<input type="color"/>
					
				</p>
				<p> 
					<label for="logo"> Logo :</label>
					
					<label for="text">Taper votre texte </label>
					<input type="text"/>
					
					<label for="police"> Police </label>
					<select name="police" id="police">
						<option value="Arial">Arial</option>
						<option value="Arial">Arial</option>
						<option value="Arial">Arial</option>
						<option value="Arial">Arial</option>
						<option value="Arial">Arial</option>
						<option value="Arial">Arial</option>
					</select>
					<label for="forme"> Forme</label>
					
				
				</p>
				<p> <label for="importer"> Importer :</label></p>
				
				
				<input type="button" value="Valider">

			</form>
	


			
		</div>
		<div class="reseaux_perso">
			<ul>
				<li><h5>Retrouvez nous sur : </h5></li>
				<li><a href="#"><img src="images/facebook-512.png" alt="fb"></a></li>
				<li><a href="#"><img src="images/instagram_PNG10.png" alt="insta"></a></li>
				<li><a href="#"><img src="images/Logo-Snapchat.png" alt="snap"></a></li>
				<li><a href="#"><img src="images/Twitter-icon.png" alt="twitter"></a></li>
			</ul>
		</div>
	</div>
	
	
</div>	
	
	
	
	
	
<!--		FOOTER 			-->	
	<?php include('parts/footer.php');?>
	
	
	
</body>
</html>