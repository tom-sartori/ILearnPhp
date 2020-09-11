<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title> Mon premier php </title>
</head>

<body>
  <h1> Liste des voitures </h1>
  Voici le résultat du script PHP : 
  <?php
          // Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */

          // On met la chaine de caractères "hello" dans la variable 'texte'
          // Les noms de variable commencent par $ en PHP
          $texte = "hello world !";

          // On écrit le contenu de la variable 'texte' dans la page Web
          echo $texte;

          $marque = "Audi"; 
          $couleur = "Noire"; 
          $immatriculation = "CJ 952 YN";

          echo "Voiture $immatriculation de marque $marque (couleur $couleur)";
          ?>
          <br>
          <br>

          <?php

          $voiture = array(
            'marque' => 'BMW',
            'couleur' => 'Blanche',
            'immatriculation' => 'AB 123 CD' );
          //var_dump($voiture); 

          $voiture1 = array(
            'marque' => 'BMW',
            'couleur' => 'Blanche',
            'immatriculation' => 'AB 123 CD' );

          $voiture2 = array(
            'marque' => 'BMW',
            'couleur' => 'Blanche',
            'immatriculation' => 'AB 123 CD' );


          //echo "Voiture ". $voiture['immatriculation'] . " de la marque " . $voiture['marque'] . " (couleur : " . $voiture['couleur'] . "). ";

          $voitures = array(); 
          $voitures[] = $voiture; 
          $voitures[] = $voiture1; 
          $voitures[] = $voiture2; 
          var_dump($voitures); 

          echo "<ul>"; 
          foreach ($voitures as $voiture) {
            foreach ($voiture as $key => $value) {
              echo " <li>" .  "$key : $value" . "</li>";
            }
            echo "<br>";
          }
          echo "</ul>";
          ?>
        </body>
        </html> 


<!-- On affiche "hello world" contenu dans la variable $texte grace à echo. 
  Lorsqu'on demande un fichier PHP à un serveur HTTP, on passe par le serveur puis par une authentification PHP de l'utilisateur, qui renvoie le fichier correspondant. -->