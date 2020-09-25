<?php 
//require_once 'Model.php'; 
require_once '../TD3/Voiture.php';
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

$tab_immat = Voiture::getVoitureByImmat('CB123FE');
foreach ($tab_immat as $key => $value){
	$key->afficher();
}
var_dump($tab_immat);

/*
$voiture1 = new Voiture("Renault", "Vert", "AZ23AN");
$voiture1->save();
*/


?> 