
<?php  

$login = htmlspecialchars($u->get('login'));
$nom = htmlspecialchars($u->get('nom'));
$prenom = htmlspecialchars($u->get('prenom'));

echo "Login : " . $login . " correspond à : " . $nom . " " . $prenom . ". <br>";

echo '<a href="./index.php?action=delete&controller=utilisateur&login=' . $login . '"> Supprimer l\'utilisateur. </a> <br>';

echo '<a href="./index.php?action=update&controller=utilisateur&login=' . $login . '"> Modifier l\'utilisateur. </a> <br>';
?>
