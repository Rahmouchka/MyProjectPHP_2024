<?php
ob_start();
?>
<a href="../../controller/admin/add.php" class="btn btn-secondary float-end">Ajouter un nouveau produit</a>
<table id="example" class="table">
    <thead>
        <tr>
            <th>Identifiant</th>
            <th>Libellé</th>
            <th>Prix (DT)</th>
            <th>Quantité</th>
            <th>Action</th>
            <!--on n'a pas mis colspan=3 car datatable ne marche pas avec colspan ou rowspan
        il faut qu'il ya le mm nbr de colonnes ds la partie thead et tbody-->
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($LesProduits as $produit) {
        ?>
            <tr>
                <td><?= $produit[0] ?></td>
                <td><?= $produit[1] ?></td>
                <td><?= $produit[2] ?></td>
                <td><?= $produit[3] ?></td>
                <td><a href="detail.php?id=<?= $produit[0] ?>" class="btn btn-info btn-sm">Voir détail</a></td>
                <td><a href="delete.php?id=<?= $produit[0] ?>" class="btn btn-danger btn-sm">Supprimer</a></td>
                <td><a href="update.php?id=<?= $Produit[0] ?>" class="btn btn-dark btn-sm">Editer</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php
$contenu = ob_get_clean();
$titre = "Liste des produits";
include "layout.php";
?>