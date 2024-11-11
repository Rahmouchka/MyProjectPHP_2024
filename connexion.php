<?php
class Connexion
{
    private $pdo;
    //au moment de la création de l'object connexion il renvoie un objet pdo
    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=e-commerce";
        $user = "root"; #root howa admin
        $pw = "";
        $this->pdo = new PDO($dsn, $user, $pw);
    }
    public function getConnexion()
    {
        return $this->pdo;
    }
    /*
try {
    $connexion = new PDO($dsn, $user, $pw);
} catch (Exception $e) {
    echo "Problème de connexion. " . $e->getMessage();
}
    */
}
