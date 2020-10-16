
<?php  

$marque = htmlspecialchars($v->getMarque()); 
$couleur = htmlspecialchars($v->getCouleur()); 
$imat = htmlspecialchars($v->getImmatriculation()); 

echo "Voiture : " . $marque . " de couleur : " . $couleur . " et d'immatriculation : " . $imat . ". <br>";

echo '<a href="./index.php?action=delete&immatriculation=' . $imat . '"> Supprimer la voiture. </a>'; 
?>
