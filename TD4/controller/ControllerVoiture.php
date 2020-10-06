
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

    public static function create() {
        require('../view/voiture/create.php');
    }

    public static function created() {
        $voiture = new ModelVoiture($_GET['marque'], $_GET['couleur'], $_GET['immatriculation']); 
        
        $bool = $voiture -> save(); 

        if ($bool == false) 
            require('../view/voiture/errorSave.php'); 
        else 
            ControllerVoiture::readAll(); 
    }
}




/* Ancien 
require_once ('../model/ModelVoiture.php'); // chargement du modèle
$tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
require ('../view/voiture/list.php');  //redirige vers la vue
*/

?>
