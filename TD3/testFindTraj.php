<?php
    require_once('Utilisateur.php');
    require_once ('Trajet.php');

    $tab = Utilisateur::findTrajets($_POST['login']);

    foreach ($tab as $key => $value) {
        $value->afficher();
}
?>