<?php
setcookie("TestCookie", "OK", time()+3600);  /* expire dans 1 heure = 3600 secondes */

echo $_COOKIE["TestCookie1"];

setcookie ("TestCookie", "", time() - 1);

?>