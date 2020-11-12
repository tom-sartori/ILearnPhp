<?php
    session_start();

$tab = array(
    "un" => "oui",
    "deux" => "non");

    $_SESSION['login'] = 'tom';
    $_SESSION['tab'] = $tab['un'];

    echo $_SESSION['login'];
    echo $_SESSION['tab'];


    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
    // Il faut réappeler session_start() pour accéder de nouveau aux variables de session
    setcookie(session_name(),'',time()-1); // deletes the session cookie containing the session ID
?>