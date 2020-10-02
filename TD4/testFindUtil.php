<?php
    require_once('Trajet.php');

    $tab = Trajet::findPassagers($_GET['id']);

    foreach ($tab as $key => $value) {
        $value->afficher();

    }
?>