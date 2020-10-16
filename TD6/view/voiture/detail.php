
<?php  

$marque = htmlspecialchars($v->getMarque()); 
$couleur = htmlspecialchars($v->getCouleur()); 
$imat = htmlspecialchars($v->getImmatriculation()); 

echo "Voiture : " . $marque . " de couleur : " . $couleur . " et d'immatriculation : " . $imat . ". <br>";

	// http://webinfo.iutmontp.univ-montp2.fr/~sartorit/TD-PHP/TD4/controller/routeur.php?action=read&Immatriculation=AZ23AN
?>
