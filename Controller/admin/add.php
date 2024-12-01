 <?php
    require_once "../../Model/CRUD_Produit.php";
    $crud = new CRUD_Produit();
    //1ère requête: affichage d'un formulaire
    include "../../View/admin/add.php";
    //2ème requête: récupération des données
    if (isset($_POST['ok'])) {
        $lib = htmlspecialchars($_POST['lib']);
        $pu = htmlspecialchars($_POST['pu']);
        $qte = htmlspecialchars($_POST['qte']);
        $desc = htmlspecialchars($_POST['desc']);
        $img = htmlspecialchars($_POST['img']);
        $promo = htmlspecialchars($_POST['promo']);
        $Produit = new Produit(NULL, $lib, $pu, $qte, $desc, $img, $promo);
        $res = $crud->add($Produit);
        if ($res) {
            header("Location: findAll.php");
            exit;
        }
    }
