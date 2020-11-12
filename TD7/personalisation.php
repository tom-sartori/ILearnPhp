<?php

    $value = $_POST['preference'];

    setcookie('cookiePreference', $value, time()+3600);

    echo $_COOKIE['cookiePreference'];


?>