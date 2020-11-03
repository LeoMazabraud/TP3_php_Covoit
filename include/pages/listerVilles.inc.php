<?php

$pdo = new Mypdo();
$manager = new VilleManager($pdo);?>

<h2>Liste des Villes</h2>

<table>
    <tr>
        <th>Numéro</th>
        <th>Nom</th>
    </tr>
    <?php
    $listeVille = $manager->getList(); //retourne le tableau de villes (objets)

    foreach ($listeVille as $ville){
        ?>
        <tr>
            <td> <?php echo $ville->getVilNum(); ?></td>
            <td> <?php echo $ville->getVilNom(); ?></td>
        </tr>
    <?php } ?>
</table>


