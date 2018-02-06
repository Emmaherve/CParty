<!doctype html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Atelier personnalisation</title>
	
	
	<link rel="stylesheet" href="css/emma.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="js/javascript_emma.js"></script>
	
	
</head>

<body>

	<?php include('parts/header.php'); ?>
	
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
			<form method="post" class="form_perso" action="index_personnalisation.php">
				<p> 
					<label for="taille" class="taille_perso"> Taille :</label>
					<ul>
					<li><input type="radio" name="taille" id="pichet"/> <img src="images/pichet.png" alt="pichet"></li>
					<li><input type="radio" name="taille" id="pinte"/><img src="images/pint.png" alt="pinte"></li>
					<li><input type="radio" name="taille" id="gobelet"/><img src="images/gobIcon.png" alt="gobelet"></li>
					<li><input type="radio" name="taille" id="shooter"/><img src="images/shootet.png" alt="demi"></li>
					</ul>	
				
				</p>
				<p> 
					<label for="couleur" class="color_perso"> Couleur :</label>
					<input type="color"/>
					
				</p>
				<p> 
					<label for="logo" class="logo_personnalisable"> Logo :</label>
					
					<label for="text" class="text_perso">Taper votre texte </label>
					<input id='inputText'type="text"/>
					
					<label for="police" class="police_perso"> Police </label>
					<select name="police" id="police">
						<option value="Arial">Arial</option>
						<option value="Comic sans MS">Comic sans MS</option>
						<option value="Arial">Hervetica</option>
						<option value="Arial">Lobster</option>
						<option value="Arial">Calibri</option>
						<option value="Arial">Ubuntu</option>
					</select>
					<p><label for="forme" class="forme_perso"> Forme :</label>
						<ul>
					<li><input type="radio" name="forme" id="cercle_perso"/> <img src="images/cercle.png" alt="cercle" style="width: 40px"></li>
					<li><input type="radio" name="forme" id="etoile_perso"/><img src="images/etoile.png" alt="etoile" style="width: 40px"></li>
					<li><input type="radio" name="forme" id="triangle_perso"/><img src="images/triangle.png" alt="triangle" style="width: 40px"></li></p>

						</ul>
				
				</p>
				<p> <label for="importer"> Importer :</label>
					<input type="file" name="avatar" id="avatar" accept="image/jpg" >
				</p>
				
				
				<button class="button_valider_form"> <span> Valider </span></button>

			</form>
			
			<div class="contentsPersoGobEtPrix">
				<div id="img_gobeletPerso">
					<img id="imgGobPerso"src="images/375x375___vert-translucide-7_gobelet-reutilisable-translucide-vert.png" alt="gobelet_vert_perso">
				</div>
				<div class="prix_gobelet">
					<span> Prix : 1€50</span>		
				</div>
				<div class='textePersoPourGoblet'><p id="textPersoGob"> </p><img src="" id="imgForme"> </div>
			</div>
	
			<div class="infoProduitPerso">
			<button class="btn btn-primary btn-lg btn-block"><img src="images/61112.png" alt="plus d'infos" id="img_infosProduit"><h4>Informations</h4></button>
			<div id="infosAboutProduit" >
				<h5> Composition </h5> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend, sem a luctus pretium, ligula nulla tempus ipsum, vel mollis mauris metus bibendum lacus. Integer non pretium felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
				<h5> Délai de livraison </h5><p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
			</div>
		</div>	

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



<!--		FOOTER 			-->	

<?php include('parts/footer.php');?>
	
</div>	
	
	
	
	
	

	
	
	
</body>
</html>