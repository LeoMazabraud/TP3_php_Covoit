<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="stylesheet.css"/>
    <title>AjoutVille</title>
</head>
<body>
    <h1>Ajouter une ville</h1>

    <?php if(empty($_POST['vil_nom'])) { // premier appel?>
    <form action="#" method="POST">
        Nom : <input type="text" name="vil_nom"><br>
        <input type="submit" value="Valider">
    </form>
    <?php } else { // deuxieme appel
            $pdo = new Mypdo();
            $manager = new VilleManager($pdo);
            $ville = new Ville ($_POST);
            $retour = $manager->add($ville);
            if ($retour != 0) //retour contient le nombre de lignes affectées
                echo 'La ville "' . $_POST['vil_nom'] . '" a été ajoutée';
            else
                echo "Erreur insertion";
    } ?>
</body>