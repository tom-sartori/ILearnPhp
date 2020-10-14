
<?php

require_once (File::build_path(array("model", "ModelVoiture.php"))); // chargement du modèle



class ControllerVoiture {
  public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD

        $controller = 'voiture'; 
        $view = 'list'; 
        $pagetitle = 'Liste des voitures'; 
        require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
      }

      public static function read() {
       $v = ModelVoiture::getVoitureByImmat($_GET['Immatriculation']); 
       $controller = 'voiture'; 
       if ($v == false) {
        $view = 'error'; 
        $pagetitle = 'Erreur';
        require(File::build_path(array("view", "view.php")));
      }
      else {
        $view = 'detail'; 
        $pagetitle = 'Details du véhicule';
        require(File::build_path(array("view", "view.php")));
      }
    }

    public static function create() {
      $controller = 'voiture'; 
      $view = 'create'; 
      $pagetitle = 'Creation de voiture'; 
      require(File::build_path(array("view", "view.php")));
    }

    public static function created() {
      $voiture = new ModelVoiture($_GET['marque'], $_GET['couleur'], $_GET['immatriculation']); 

      $bool = $voiture -> save(); 

      $controller = 'voiture'; 
      $view = 'errorSave'; 
      $pagetitle = 'Erreur de sauvegarde'; 
      if ($bool == false) 
        require(File::build_path(array("view", "view.php"))); 
      else 
        self::readAll(); 
    }


    public static function delete(){
     $sql = "DELETE FROM voiture WHERE immatriculation=:immat";
     try {
       $req_prep = Model::$pdo->prepare($sql);
       $value = array(
         "immat"=>$_GET['immatriculation'],
       );
       $req_prep->execute($value);
       self::readAll();
     }
     catch (PDOException $e) {
       echo $e->getMessage();
     }
   }



/* Ancien 
require_once ('../model/ModelVoiture.php'); // chargement du modèle
$tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
require ('../view/voiture/list.php');  //redirige vers la vue
*/



}
?>
