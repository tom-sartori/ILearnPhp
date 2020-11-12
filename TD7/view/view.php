<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $pagetitle; ?></title>


	<nav style="border: 1px solid navy; text-align:center; padding: 5px ">
		<a href="index.php?action=readAll"> Liste des voitures </a> 
		<a href="index.php?action=readAll&controller=utilisateur"> Liste des utilisateurs </a> 
		<a href="index.php?action=readAll&controller=trajet"> Liste des trajets </a> 
	</nav>
    <link href="../personalisation.php">
</head>
<body>
	<?php
// Si $controleur='voiture' et $view='list',
// alors $filepath="/chemin_du_site/view/voiture/list.php"
	$filepath = File::build_path(array("view", static::$object, "$view.php"));
	require $filepath;
	?>
</body>

<footer>
	<p style="border: 1px solid navy;text-align:right;padding-right:1em;">
		Site de covoiturage pour covoitureurs.	</p>
</footer>
</html>

