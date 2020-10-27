
<?php

require_once (File::build_path(array("model", "ModelVoiture.php"))); // chargement du modèle



class ControllerVoiture {

    protected static $object = "voiture";

  public static function readAll() {
        $tab_v = ModelVoiture::selectAll();     //appel au modèle pour gerer la BD

        $controller = 'voiture'; 
        $view = 'list'; 
        $pagetitle = 'Liste des voitures'; 
        require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
      }

      public static function read() {
       $v = ModelVoiture::select($_GET['immatriculation']);
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

      if ($bool == false) {
        $view = 'errorSave'; 
        $pagetitle = 'Erreur de sauvegarde'; 
        $tab_v = ModelVoiture::getAllVoitures();
        require(File::build_path(array("view", "view.php"))); 
      }
      else {
        $view = 'created'; 
        $pagetitle = 'Voiture créée'; 
        $tab_v = ModelVoiture::getAllVoitures();
        require(File::build_path(array("view", "view.php")));
      }
    }


    public static function delete(){
      $immat = $_GET['immatriculation']; 
      ModelVoiture::deleteByImmat($immat); 

      $tab_v = ModelVoiture::getAllVoitures(); 

      $controller = 'voiture'; 
      $view = 'deleted'; 
      $pagetitle = 'Voiture supprimée'; 

      require_once(File::build_path(array("view", "view.php"))); 

    /* Pas d'utilité ici car devrait etre dans le model
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
    */
   }

   public static function error() {
    $controller = 'voiture'; 
    $view = 'errorAction'; 
    $pagetitle = 'Erreur'; 

    $tab_v = ModelVoiture::getAllVoitures(); 

    require (File::build_path(array("view", "view.php")));
  }


  public static function update() {
    $v = ModelVoiture::getVoitureByImmat($_GET['immatriculation']); 

    $controller = 'voiture'; 
    $view = 'update'; 
    $pagetitle = 'Mise a jour';

    require (File::build_path(array("view", "view.php")));
  } 

  public static function updated() {
    $bool = ModelVoiture::update($_GET); 

    if ($bool) {
      $immat = $_GET['immatriculation'];
      $tab_v = ModelVoiture::getAllVoitures(); 

      $controller = 'voiture'; 
      $view = 'updated'; 
      $pagetitle = 'Voiture mise à jour'; 

      require_once(File::build_path(array("view", "view.php"))); 
    }
    else {
      $controller = 'voiture'; 
      $view = 'errorAction'; 
      $pagetitle = 'Erreur MAJ'; 

      require_once(File::build_path(array("view", "view.php"))); 
    }
  }





/* Ancien 
require_once ('../model/ModelVoiture.php'); // chargement du modèle
$tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
require ('../view/voiture/list.php');  //redirige vers la vue
*/



}
?>
