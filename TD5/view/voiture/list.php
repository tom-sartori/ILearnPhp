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

        echo '<p> Voiture d\'immatriculation ' . '<a href="http://webinfo.iutmontp.univ-montp2.fr/~sartorit/TD-PHP/TD4/controller/routeur.php?action=read&Immatriculation=' . $v->getImmatriculation() . '">' . $v->getImmatriculation() . '. </a>' . 

        '<a href="../controller/routeur.php?action=delete&immatriculation='.$v->getImmatriculation().'">'.'Supprimer cette Voiture'.'</a>' . '.</p>';

    }
    ?>
</body>
</html>
