<?php
ob_start();
?>
<form action="../../Controller/admin/add.php" method="post" class="form-control">
    <label for="">Libellé</label>
    <input type="text" name="lib" class="form-control" id=""><br>
    <label for="">Prix</label>
    <input type="text" name="pu" class="form-control" id=""><br>
    <label for="">Quantité</label>
    <input type="text" name="qte" class="form-control" id=""><br>
    <label for="">Description</label>
    <textarea type="text" name="desc" class="form-control" id=""></textarea><br>
    <label for="">Image</label>
    <input type="text" name="img" class="form-control" id=""><br>
    <label for="">Promo</label>
    <input type="text" name="promo" value="0" id="" class="form-control"><br>
    <input type="submit" name="ok" class="btn btn-primary btn-lg" value="Ajouter">
</form>
<?php
$contenu = ob_get_clean();
$titre = "Liste des produits";
include "layout.php";
?>