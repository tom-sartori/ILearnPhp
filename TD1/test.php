<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php

          $texte = "hello world ! \n";

          // On écrit le contenu de la variable 'texte' dans la page Web
          echo $texte;

          $prenom="Helmut";
echo <<< EOT
Texte à afficher
sur plusieurs lignes
avec caractères spéciaux \t \n
 et remplacement de variables $prenom
les caractères suivants passent : " ' $ / \ ; 
EOT;
        ?>
    </body>
</html> 