<?php
ob_start();
?>

<div class="row">
    <div class="col-6">
        <!--afficher la photo il vaut mieux l'afficher sous forme de card (utiliser div card)-->
        <div class="card">
            <img src="<?= $Produit[5] ?>" alt="photo">
        </div>
    </div>
    <div class="col-6">
        <h3><?= $Produit[1] ?> ( <?= $Produit[2] ?> DT)</h3>
        <p><?= $Produit[4] ?></p>
        <?php
        if ($Produit[6] == 1)
        ?>
        <H4 class="badge bg-success">En Promotion</H4>
    </div>
</div>
<?php
$contenu = ob_get_clean();
$titre = "Liste des produits";
include "layout.php";
?>