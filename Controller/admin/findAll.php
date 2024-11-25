<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "../../Model/CRUD_Produit.php"; //appel du modèle
    $crud = new CRUD_Produit(); //construire l'objet pr retourner un résultat
    $LesProduits = $crud->findAll();
    include "../../View/admin/findAll.php"; //transmettre le résultat au template en incluant le fichier
    ?>

</body>

</html>