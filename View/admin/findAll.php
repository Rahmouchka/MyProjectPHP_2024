<?php
ob_start();
?>
<table class="table">
    <tr>
        <th>Identifiant</th>
        <th>Libellé</th>
        <th>Prix (DT)</th>
        <th>Quantité</th>
        <th colspan=3>Action</th>
    </tr>
    <?php
    foreach ($LesProduits as $produit) {
    ?>
        <tr>
            <td><?= $produit[0] ?></td>
            <td><?= $produit[1] ?></td>
            <td><?= $produit[2] ?></td>
            <td><?= $produit[3] ?></td>
            <td><a href="detail.php?id=<?= $produit[0] ?>" class="btn btn-info btn-sm">Voir détail</a></td>
            <td><a href="delete.php?id=<?= $Produit[0] ?>" class="btn btn-danger btn-sm">Supprimer</a></td>
            <td><a href="update.php?id=<?= $Produit[0] ?>" class="btn btn-dark btn-sm">Editer</a></td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
$contenu = ob_get_clean();
$titre = "Liste des produits";
include "layout.php";
?>