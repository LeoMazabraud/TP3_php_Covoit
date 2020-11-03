<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="stylesheet.css"/>
    <title>AjoutParcours</title>
</head>
<body>
    <h1>Ajouter un parcours</h1>

    <?php if(empty($_POST['vil_nom1']) && empty($_POST['vil_nom2'])
        && empty($_POST['par_km'])) { // premier appel?>

        <form action="#" method="POST">

            Ville 1 : <select name="vil_nom1"><br>
                <?php
                $pdo = new Mypdo();
                $manager = new VilleManager($pdo);
                $listeVille = $manager->getList();
                foreach ($listeVille as $ville){ ?>
                    <option values="<?php $ville->getVilNom() ?>"></option>
                <?php } ?>
            </select>

             Ville 2 : <select name="vil_nom2"><br>
                <?php
                $pdo = new Mypdo();
                $manager = new VilleManager($pdo);
                $listeVille = $manager->getList();
                foreach ($listeVille as $ville){ ?>
                    <option values="<?php $ville->getVilNom() ?>"></option>
                <?php } ?>
            </select>

            Nombre de kilomètre(s) : <input type="number" name="par_km"><br>
            <input type="submit" value="Valider">

        </form>

    <?php } else { // deuxieme appel
        $pdo = new Mypdo();
        $manager = new ParcoursManager($pdo);
        $parcours = new Parcours ($_POST);
        $retour = $manager->add($parcours);
        if ($retour != 0) //retour contient le nombre de lignes affectées
            echo 'Le parcours a été ajoutée';
        else
            echo "Erreur insertion";
    } ?>
</body>