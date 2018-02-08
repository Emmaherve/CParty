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
			
			<?php include "pdo.php"; ?>
			<?php include "parts/header.php"; ?>
			
			<div class="block-center">
				<div class="inner">
					
					

					<?php 


					$stmt= $connexion->prepare('SELECT * FROM produit WHERE idproduit= :idproduit');
					$stmt->bindValue(':idproduit', '1', PDO::PARAM_STR);
					$stmt->execute();
					$produit1 = $stmt->fetchObject();
					
					$stmt= $connexion->prepare('SELECT * FROM produit WHERE idproduit= :idproduit');
					$stmt->bindValue(':idproduit', '2', PDO::PARAM_STR);
					$stmt->execute();
					$produit2 = $stmt->fetchObject();
				
					
					$stmt= $connexion->prepare('SELECT * FROM produit WHERE idproduit= :idproduit');
					$stmt->bindValue(':idproduit', '3', PDO::PARAM_STR);
					$stmt->execute();
					$produit3 = $stmt->fetchObject();				
				
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
						
						
						
						
						<div class="produit_choix">
							<a href="#">
							<h1 class="img_product"><img src="images/<?php echo $produit1 -> imgProduit ?>" alt="despe-x6"></h1>
							<h1 class="price_product"><div><?php echo $produit1 -> prixProduit; ?> €</div> </h1>
							<h1 class="capacity_product"><div><?php echo $produit1 -> nomProduit; ?> </div> </h1>
							<h1 class="name_product"> <div><?php echo $produit1 -> marqueProduit; ?></div></h1>
							</a>
						
						
						</div>
						
						<div class="produit_choix">
							<a href="index_choixproduit.php">
							<h1 class="img_product"><img src="images/<?php echo $produit2 -> imgProduit ?>" alt="despe-x6"></h1>
							<h1 class="price_product"><div><?php echo $produit2 -> prixProduit; ?> €</div> </h1>
							<h1 class="capacity_product"><div><?php echo $produit2 -> nomProduit; ?> </div> </h1>
							<h1 class="name_product"> <div><?php echo $produit2 -> marqueProduit; ?></div></h1>
							</a>
						
						
						</div>	
						
						<div class="produit_choix">
							<a href="#">
							<h1 class="img_product"><img src="images/<?php echo $produit3 -> imgProduit ?>" alt="despe-x6"></h1>
							<h1 class="price_product"><div><?php echo $produit3 -> prixProduit; ?> €</div> </h1>
							<h1 class="capacity_product"><div><?php echo $produit3 -> nomProduit; ?> </div> </h1>
							<h1 class="name_product"> <div><?php echo $produit3 -> marqueProduit; ?></div></h1>
							</a>
						
						
						</div>	
						
						
						<h1 class="name_product"> <div><?php echo $produit3 -> marqueProduit; ?></div></h1>
						
					</div>
					
				
				</div>
			</div>
				
			
		<?php include "parts/footer.php" ?>
			
		</div>
		
	
	</body>
	
</html>