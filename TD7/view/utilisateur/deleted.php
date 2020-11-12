<?php
echo "<p> L'utilisateur, de login " . $login . " a été supprimée. </p>";
require(File::build_path(array("view", "utilisateur", "list.php")));
?>