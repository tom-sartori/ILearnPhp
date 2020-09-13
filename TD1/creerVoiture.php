<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Créer voiture </title>
	</head>

	<body>

		<?php 
		if (empty($_POST)) {
			echo "Erreur d'arguments. "; 
			return;
		}

		require_once('./Voiture.php'); 

		$voiture1 = new Voiture($_POST['marque'], $_POST['couleur'], $_POST['immatriculation']); 
		$voiture1->afficher(); 
		?>

	</body>
</html>	