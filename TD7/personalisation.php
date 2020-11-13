<?php

    $value = $_GET['preference'];

    setcookie('cookiePreference', $value, time()+3600);

    require ("index.php");

?>