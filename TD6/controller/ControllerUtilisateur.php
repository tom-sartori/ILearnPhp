
<?php

require_once (File::build_path(array("model", "ModelUtilisateur.php"))); // chargement du modèle



class ControllerUtilisateur {

    protected static $object = 'utilisateur';

  public static function readAll() {
        $tab_u = ModelUtilisateur::selectAll();     //appel au modèle pour gerer la BD

        $controller = 'utilisateur';
        $view = 'list'; 
        $pagetitle = 'Liste des utilisateurs';
        require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
      }
}
?>