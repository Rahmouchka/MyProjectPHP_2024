<?php
//comme findAll mais on va afficher un seul produit
require_once "../../Model/CRUD_Produit.php";
$crud = new CRUD_Produit();
$id = $_GET['id'];
$Produit = $crud->find($id);
include "../../View/admin/detail.php";