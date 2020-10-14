<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des voitures</title>
</head>
<body>
    <?php

    foreach ($tab_v as $v) {
            //echo '<p> Voiture d\'immatriculation ' . $v->getImmatriculation() . '.</p>';

    	$imat = htmlspecialchars($v->getImmatriculation()); 

        echo '<p> Voiture d\'immatriculation ' . '<a href="./index.php?action=read&Immatriculation=' . $imat . '">' . $imat . '. </a>' . 

        '<a href="./index.php?action=delete&immatriculation='. $imat .'">'.'Supprimer cette Voiture'.'</a>' . '.</p>';

    }
    ?>
</body>
</html>
