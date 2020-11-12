<?php

    $value = $_GET['preference'];

    setcookie('cookiePreference', $value);

    echo $_COOKIE['cookiePreference'];


?>