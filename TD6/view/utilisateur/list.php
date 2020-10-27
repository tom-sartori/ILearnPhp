<?php

foreach ($tab_u as $v) {
    //echo '<p> Voiture d\'immatriculation ' . $v->getImmatriculation() . '.</p>';

    $login = htmlspecialchars($v->get("login"));
    $login2 = rawurlencode($v -> get("login"));

    echo '<p>Login : ' . '<a href="./index.php?action=read&Immatriculation=' . $login2 . '">' . $login . '. </a>' .

        '<a href="./index.php?action=delete&immatriculation='. $login2 .'">'.'Supprimer cette Voiture'.'</a>' . '.</p>';

}
?>