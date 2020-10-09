<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Detail</title>
</head>
<body>
	<?php  
	echo "Voiture : " . $v->getMarque() . " de couleur : " . $v->getCouleur() . " et d'immatriculation : " . $v->getImmatriculation() . ". <br>";

	// http://webinfo.iutmontp.univ-montp2.fr/~sartorit/TD-PHP/TD4/controller/routeur.php?action=read&Immatriculation=AZ23AN
	?>

</body>
</html>