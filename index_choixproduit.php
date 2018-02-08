<?php include "parts/header.php";
include "pdo.php";
			

	if(isset ($_GET["id"])){
		$id = $_GET["id"];
	} else {
		header("location: index_aperos.php");
	}

	$stmt= $connexion->prepare('SELECT * FROM produit WHERE idproduit= :idproduit');
	$stmt->bindValue(':idproduit', $id, PDO::PARAM_STR);
	$stmt->execute();
	$produit = $stmt->fetchObject();

?>
<!doctype html>
<html>
	<head>
	
		<meta charset="utf-8">
		<title>Choix prod</title>
		<title>Produits</title>
		
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="js/javascript_emma.js"></script>
		
	</head>

	<body>
		
		<div class="choixproduit">
		
			<div class="block-center">
				<div class="inner">
					
					<div class="arbo"> Home > Produits > Apéro et produit > Pack de bière </div>
					
					<div class="produit_choix">
						<h1 class="image_choice"><img src="images/<?php echo $produit -> imgProduit ?>" alt="despe-x6"> </h1>
						<h1 class="name_choice"> <div><?php echo $produit -> marqueProduit; ?></div></h1>
						<h1 class="desc_choice"> <div><?php echo $produit -> descriptionProduit; ?></div> </h1>
						<h1 class="ref_choice"><div><div><?php echo $produit -> refProduit; ?></div> </h1>
						<h1 class="moypayment_choice"><div><img src="images/cb.png" alt="moypayement"> </div></h1>
						<h1 class="quantite_choice">Quantité  - 1 + </h1>
						<h1 class="price_choice"><div><?php echo $produit -> prixProduit; ?> €</div> </h1>
						<h1 class="add_choice"><img src="images/panier-vide.png" alt="panier"></h1>
						<div class="infoProduit">
							<button class="btn btn-primary btn-lg btn-block"><img src="images/61112.png" alt="plus d'infos" class="img_infos">	<h4>Informations</h4>
							</button>
							<div id="infosProduit" >
								<h5> Composition </h5> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend, sem a luctus pretium, ligula nulla tempus ipsum, vel mollis mauris metus bibendum lacus. Integer non pretium felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<h5> Délai de livraison </h5><p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							</div>
						</div>
						
					</div>
					
				
					<!--<ul>

						<li><a href="#" class="image_choice"><img src="images/despe-x6.jpg" alt="despe"> </a></li>

						<li><div class="name_choice">DESPERADOS</div></li>

						<li><div class="desc_choice">Bière aromatisée téquila pack 6x33cl - 5,9°</div></li>

						<li><div class="ref_choice"> Ref:087952 </div></li>

						<li><div class="moypayment_choice"> <img src="images/cb.png" alt="moypayement"> </div></li>

						<li><div class="quantite_choice"> Quantité     - 1 +  </div></li>

						<li><div class="price_choice"> 6,50€ </div></li>

						<li><div class="price_choice"><img src="images/panier-vide.png" alt="panier"> Ajouter </div></li>

						<li><div class="info_choice"><img src="images/61112.png"alt="plusinfo"> Information </div></li>

					</ul>-->
					</div>
				</div>
			
				<?php include "parts/footer.php" ?>
			</div>
			
			
		
		</div>
	
	</body>
	
</html>
