<?php 
//require_once 'Model.php'; 
require_once '../TD1/Voiture.php'; 
require_once '../TD1/Trajet.php'; 
	
/*
$rep = Model::$pdo-> query('select * from voiture'); 	
//$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);

$rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
$tab_voit = $rep->fetchAll();


foreach ($tab_voit as $key) {
	$key->afficher();
}
*/

$tabVoit = Voiture::getAllVoitures(); 
foreach ($tabVoit as $key) {
	$key->afficher();
}
 

?> 