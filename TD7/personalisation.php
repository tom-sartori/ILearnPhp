<?php

    $value = $_POST['preference'];

    setcookie('cookiePreference', $value, time()+3600);

    require ("index.php");

?>