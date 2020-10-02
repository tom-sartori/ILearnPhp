<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Créer voiture </title>
	</head>

	<body>

		<?php
       require_once('Voiture.php');

		if (empty($_POST)) {
			echo "Erreur d'arguments. "; 
			return;
		}

		$voiture1 = new Voiture($_POST['marque'], $_POST['couleur'], $_POST['immatriculation']); 
		$voiture1->afficher();

		$voiture1->save();
		?>

	</body>
</html>	