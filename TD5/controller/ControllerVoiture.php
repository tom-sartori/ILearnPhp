
<?php

require_once (File::build_path(array("model", "ModelVoiture.php"))); // chargement du modèle



class ControllerVoiture {
  public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require (File::build_path(array("view", "voiture", "list.php")));  //"redirige" vers la vue
      }

      public static function read() {
       $v = ModelVoiture::getVoitureByImmat($_GET['Immatriculation']); 
       if ($v == false)
        require(File::build_path(array("view", "voiture", "error.php")));
      else
        require(File::build_path(array("view", "voiture", "detail.php")));
    }

    public static function create() {
      require(File::build_path(array("view", "voiture", "create.php")));
    }

    public static function created() {
      $voiture = new ModelVoiture($_GET['marque'], $_GET['couleur'], $_GET['immatriculation']); 

      $bool = $voiture -> save(); 

      if ($bool == false) 
        require(File::build_path(array("view", "voiture", "errorSave.php"))); 
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
