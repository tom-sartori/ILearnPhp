<?php
setcookie("TestCookie", "OK", time()+3600);  /* expire dans 1 heure = 3600 secondes */

$tab = array("oui", "non");

echo $_COOKIE[serialize($tab)];

//setcookie ("TestCookie", "", time() - 1);

?>