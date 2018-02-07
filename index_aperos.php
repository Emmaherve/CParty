<!doctype html>
<html>
	<head>
	
		<meta charset="utf-8">
		<title>Apéro</title>
		
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		
	</head>

	<body>
		
		<div class="aperomenu">
			
			<?php include "pdo.php"; ?>
			<?php include "parts/header.php"; ?>
			
			<div class="block-center">
				<div class="inner">
					
					

					<?php 


					$stmt= $connexion->prepare('SELECT * FROM produit WHERE idproduit= :idproduit');
					$stmt->bindValue(':idproduit', '3', PDO::PARAM_STR);
					$stmt->execute();
					$produit = $stmt->fetchObject();
					
					echo $produit -> imgProduit;
				
					?>
					
				
					<div class="arbo"> Home > Produits > Apéos et boissons </div>
					
					<div class="title">Apéros et boissons </div>
					
					<div class="choixdesproduits">	
						<form action="formulaire.php" method="post" class="affinee"> 
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
						
						<ul>

						<li><a href="#" class="image_choice"><img src="images/desperados-x6-500x600.jpg" alt="despe"> </a></li>

						<li><div class="name_choice">DESPERADOS</div></li>

						<li><div class="desc_choice">Bière aromatisée téquila pack 6x33cl - 5,9°</div></li>

						<li><div class="ref_choice"> Ref:087952 </div></li>

						<li><div class="moypayment_choice"> <img src="images/cb.png" alt="moypayement"> </div></li>

						<li><div class="quantite_choice"> Quantité     - 1 +  </div></li>

						<li><div class="price_choice"> 6,50€ </div></li>

						<li><div class="price_choice"><img src="images/panier-vide.png" alt="panier"> Ajouter </div></li>

						<li><div class="info_choice"><img src="images/61112.png"alt="plusinfo"> Information </div></li>

						</ul>
								
						</div> 
						
					</div>
					
				
				</div>
			</div>
				
			
		<?php include "parts/footer.php" ?>
			
		</div>
		
	
	</body>
	
</html>