<?php 
echo "<p> La voiture d'immatriculation " . $immat . " a été modifiée. </p>";
require(File::build_path(array("view", "voiture", "list.php")));
?>