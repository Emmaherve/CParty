<?php include "pdo.php"; 
include "parts/header.php"; 
$stmt= $connexion->prepare('SELECT * FROM produit');
$stmt->execute();
				
?>
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
			
			<div class="block-center">
				<div class="inner">
					
				
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
						
						<div class="choixdesprod">
						<?php 
						while($produit= $stmt-> fetch()){
						?>
						<div class="produit_choix">
							<a href="index_choixproduit.php?id=<?php echo $produit -> idProduit; ?>">
							<p class="img_product"><img src="images/<?php echo $produit -> imgProduit; ?>" alt="<?php echo $produit -> marqueProduit; ?>"></p>
							<p class="price_product"><span><?php echo $produit -> prixProduit; ?> €</span> </p>
							<p class="capacity_product"><span><?php echo $produit -> nomProduit; ?> </span> </p>
							<p class="name_product"> <span><?php echo $produit -> marqueProduit; ?></span></p>
							</a>						
						
						</div>
						<?php
						}
						?>	
						</div>
						
					</div>
					<p></p>
				</div>
			</div>
				
			
		<?php include "parts/footer.php" ?>
			
		</div>
		
	
	</body>
	
</html>