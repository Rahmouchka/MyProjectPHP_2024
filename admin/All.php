<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*
    require_once "../cconnexion.php";
    $connexion = new Connexion();
    $pdo = $connexion->getConnexion();
    $sql = "select * from produit";
    $res = $pdo->query($sql); //$res est un objet PDOStatement
    $LesProduits = $res->fetchAll(PDO::FETCH_OBJ);
    //FETCH_NUM à retenir!!
    //FETCH_ASSOC tab associatif ds chaque produit
    echo '<pre>';
    var_dump($LesProduits);
    echo '</pre>';
    */

    ob_start();
    require_once "../classes/CRUD_Produit.php";
    $crud = new CRUD_Produit();
    $LesProduits = $crud->findAll();
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
</body>

</html>