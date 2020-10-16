    <?php

    foreach ($tab_v as $v) {
            //echo '<p> Voiture d\'immatriculation ' . $v->getImmatriculation() . '.</p>';

       $imat = htmlspecialchars($v->getImmatriculation()); 
       $imat2 = rawurlencode($v -> getImmatriculation()); 

       echo '<p> Voiture d\'immatriculation ' . '<a href="./index.php?action=read&Immatriculation=' . $imat2 . '">' . $imat . '. </a>' . 

       '<a href="./index.php?action=delete&immatriculation='. $imat2 .'">'.'Supprimer cette Voiture'.'</a>' . '.</p>';

   }
   ?>
