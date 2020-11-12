<?php

$tab = array(
    "un" => "oui",
    "deux" => "non");

setcookie("TestCookie", serialize($tab), time()+3600);  /* expire dans 1 heure = 3600 secondes */


echo $_COOKIE[unserialize("TestCookie")];

//setcookie ("TestCookie", "", time() - 1);

?>