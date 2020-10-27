<?php
require_once (File::build_path(array("controller", "ControllerVoiture.php")));
require_once (File::build_path(array("controller", "ControllerUtilisateur.php")));

// On recupère l'action passée dans l'URL
if (!isset($_GET['action'])) 
	$action = 'readAll';
else {
	$action = $_GET['action'];
	if ( !in_array($action, get_class_methods('ControllerVoiture')) )
		$action = 'error'; 
}

if (!isset($_GET['controller'])) {
    $controller = 'voiture';
    $controller_class = "ControllerVoiture";

    $controller_class::$action();
}
else {
    $controller = $_GET['controller'];
    $controller_class = "Controller" . ucfirst($controller);
    if(!class_exists($controller_class)) {
        $action = 'error';
        ControllerVoiture::$action();
    }
    else
        $controller_class::$action();
}




// Avec readAll : 
// http://webinfo.iutmontp.univ-montp2.fr/~sartorit/TD-PHP/TD4/controller/routeur.php?action=readAll
?>