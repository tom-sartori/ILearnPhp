
<?php

require_once ('../model/ModelVoiture.php'); // chargement du modèle
class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../view/voiture/list.php');  //"redirige" vers la vue
    }

    public static function read() {
    	$v = ModelVoiture::getVoitureByImmat($_GET['Immatriculation']); 
    	if ($v == false)
    		require('../view/voiture/error.php');
    	else
    		require('../view/voiture/detail.php');
    }
}




/* Ancien 
require_once ('../model/ModelVoiture.php'); // chargement du modèle
$tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
require ('../view/voiture/list.php');  //redirige vers la vue
*/

?>
