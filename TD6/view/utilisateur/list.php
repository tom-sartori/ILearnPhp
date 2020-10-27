<?php

foreach ($tab_u as $u) {
    //echo '<p> Voiture d\'immatriculation ' . $v->getImmatriculation() . '.</p>';

    $login = htmlspecialchars($u->get("login"));
    $login2 = rawurlencode($u -> get("login"));

    echo '<p>Login : ' . '<a href="./index.php?action=read&controller=utilisateur&login=' . $login2 . '">' . $login . '. </a>' .

        '<a href="./index.php?action=delete&controller=utilisateur&login='. $login2 .'">'.'Supprimer cette Voiture'.'</a>' . '.</p>';

}
?>