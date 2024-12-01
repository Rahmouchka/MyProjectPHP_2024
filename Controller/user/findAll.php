<?php
require_once "../../Model/CRUD_Produit.php"; //appel du modèle
$crud = new CRUD_Produit(); //construire l'objet pr retourner un résultat
$LesProduits = $crud->findAll();
include "../../View/user/findAll.php"; //transmettre le résultat au template en incluant le fichier
