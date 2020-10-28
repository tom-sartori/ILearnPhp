
<?php

require_once (File::build_path(array("model", "ModelUtilisateur.php"))); // chargement du modèle



class ControllerUtilisateur {

    protected static $object = 'utilisateur';

  public static function readAll() {
      $tab_u = ModelUtilisateur::selectAll();     //appel au modèle pour gerer la BD

      $controller = 'utilisateur';
      $view = 'list';
      $pagetitle = 'Liste des utilisateurs';
      require(File::build_path(array("view", "view.php")));  //"redirige" vers la vue
  }

    public static function read() {
        $u = ModelUtilisateur::select($_GET['login']);
        $controller = 'utilisateur';
        if ($u == false) {
            $view = 'error';
            $pagetitle = 'Erreur';
            require(File::build_path(array("view", "view.php")));
        }
        else {
            $view = 'detail';
            $pagetitle = 'Details de l\'utilisateur';
            require(File::build_path(array("view", "view.php")));
        }
    }

    public static function delete() {
        $login = ModelUtilisateur::delete($_GET['login']);

        $tab_u = ModelUtilisateur::selectAll();

        $controller = 'utilisateur';
        $view = 'deleted';
        $pagetitle = 'Utilisateur supprimé';

        require_once(File::build_path(array("view", "view.php")));
    }
}
?>
