<?php
ob_start();
?>
<div class="row">
    <div class="col-6">
        <!--afficher la photo il vaut mieux l'afficher sous forme de card (utiliser div card)-->
        <img src="<?= $Produit[5] ?>" alt="photo">
    </div>
    <div class="col-6">
        <h3><?= $Produit[1] ?> ( <?= $Produit[2] ?> DT)</h3>
        <p><?= $Produit[4] ?></p>
    </div>
</div>
<?php
$contenu = ob_get_clean();
$titre = "Liste des produits";
include "layout.php";
?>