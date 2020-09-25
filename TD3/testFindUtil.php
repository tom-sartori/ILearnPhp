<?php
    require_once('Trajet.php');

    $tab = Trajet::findPassagers('1');

    foreach ($tab as $key => $value) {
        $value->afficher();

    }
?>