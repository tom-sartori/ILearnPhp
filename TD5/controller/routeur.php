<?php
require_once 'ControllerVoiture.php';
// On recupère l'action passée dans l'URL
$action = $_GET['action'];
// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action(); 

// Avec readAll : 
// http://webinfo.iutmontp.univ-montp2.fr/~sartorit/TD-PHP/TD4/controller/routeur.php?action=readAll
?>