<?php
    session_start();

$tab = array(
    "un" => "oui",
    "deux" => "non");

    $_SESSION['login'] = 'tom';
    $_SESSION['tab'] = $tab['un'];

    echo $_SESSION['login'];
    echo $_SESSION['tab'];

?>