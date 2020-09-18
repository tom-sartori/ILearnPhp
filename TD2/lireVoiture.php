<?php 
require_once 'Model.php'; 
	
$rep = Model::$pdo-> query('select * from voiture'); 	
$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);

foreach ($tab_obj as $key) {
	foreach ($key as $key1 => $value) {
		echo "$key1 : $value ";
	}
}
?> 