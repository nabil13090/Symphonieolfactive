<?php

namespace Models;

use entity\Produits;
use Database;

abstract class Model
{
    
    protected $pdo;
    protected $table;

    public function __construct()
    {
        $this->pdo = Database::getPdo();
    }


    public function findAll()
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table}");

        $query->execute();
        $allProduits = $query->fetchAll();
        return  $allProduits;

    }


    public function findByBanniere(int $id)
    {
        $query = $this->pdo->prepare("SELECT * FROM banniere WHERE banniere = :id");
        $query->execute([':id '=> $id]);
        $banniere = $query->fetchAll();
        return $banniere;
    }
    

}