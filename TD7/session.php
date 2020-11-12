<?php
    session_start();

    $_SESSION['login'] = 'tom';

    echo $_SESSION['login'];

?>