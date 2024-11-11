<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "../connexion.php";
    $sql = "INSERT INTO produit
    VALUES (NULL,'cable usb',2,200,'Lorem ipsum dolor sit amet consectetur adipisicing elit.','https://picsum.photos/200/200',0";
    //envoie de la requete sql
    //avant de fr l'envoie il faut créer $connexion=new Connexion
    $connexion = new Connexion();
    $pdo = $connexion->getConnexion();
    $res = $pdo->exec($sql);
    echo var_dump($res);
    ?>
</body>

</html>