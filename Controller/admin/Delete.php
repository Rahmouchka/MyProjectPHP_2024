<?php
$id = $_GET['id'];
require_once "../../Model/CRUD_Produit.php";
$crud = new CRUD_Produit();
$res = $crud->delete($id);
if ($res) {
    header("location:findAll.php");
    exit;
} else echo "pb de suppression!!!";
