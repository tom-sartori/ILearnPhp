<?php
require_once (File::build_path(array("controller", "ControllerVoiture.php")));
// On recupère l'action passée dans l'URL
if (!isset($_GET['action'])) 
	$action = 'readAll';
else {
	$action = $_GET['action'];
	if ( !in_array($action, get_class_methods('ControllerVoiture')) )
		$action = 'error'; 
}

// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action(); 




// Avec readAll : 
// http://webinfo.iutmontp.univ-montp2.fr/~sartorit/TD-PHP/TD4/controller/routeur.php?action=readAll
?>