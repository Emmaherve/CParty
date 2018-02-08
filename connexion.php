<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Connexion CParty</title>
	
	<link rel="stylesheet" href="css/emma.css">
	
	<link rel="stylesheet" href="../vendors/bootstrap/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body>
	
	<script src="vendors/jquery/jquery.min.js"></script>
	<script src="vendors/popper/popper.min.js"></script>
	<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<!-- HEADER -->
<?php include('parts/header.php');?>

	
<!-- Connexion -->	
	
	 <div id="container_connexion">
            <!-- zone de connexion -->
            
            <form action="verif_connexion.php" method="post">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" id="username" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" id="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >

            </form>
		 
				<div class="lienInscription">
					<p>Pas encore de compte ? <span><a href="inscription.php"> Inscrivez-vous !</a></span></p>
				</div>	
        </div>


	
<!-- FOOTER -->
<?php	include('parts/footer.php');?>	
</body>
</html>