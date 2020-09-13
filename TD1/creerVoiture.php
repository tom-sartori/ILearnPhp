<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Créer voiture </title>
	</head>

	<body>

		<?php 
		if (empty($_GET)) {
			echo "Erreur d'arguments. "; 
			return;
		}

		require_once('./Voiture.php'); 

		$voiture1 = new Voiture($_GET['marque'], $_GET['couleur'], $_GET['immatriculation']); 
		$voiture1->afficher(); 
		?>

	</body>
</html>	