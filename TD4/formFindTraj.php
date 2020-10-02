<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Formulaire trajet </title>
</head>

<body>
<form method="post" action="testFindTraj.php">
    <fieldset>
        <legend>Mon formulaire :</legend>
        <p>
            <label for="id_utilisateur">Id de l'utilisateur : </label>
            <input type="text" placeholder="Ex : paysj" name="login" id="id_utilisateur" required/>
        </p>

        <p>
            <input type="submit" value="Envoyer" />
            <!-- Ajoute les élements dans le query string du lien
                Cela remplit le tableau $_Get, puis lance le script formmulaireVoiture.php
                -->
        </p>

    </fieldset>
</form>

</body>
</html>