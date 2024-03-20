<?php


class Model
{

    protected $pdo;

    public function __construct()
    {
        $this->pdo = Database::getPdo();
    }


    public function findAll()
    {
        $query = $this->pdo->prepare("SELECT nom, prix, rating, imageid FROM produits.id WHERE");

        $query->execute();
        return $query->fetchAll();
    }

    public function find(int $id)
    {
        $query = $this->pdo->prepare("SELECT produits.nom, produits.description, produits.prix, produits.imageId, produits.contenances, produits.rating FROM `produits` WHERE genreId = $id");
        $query->execute();
        $result = $query->fetch(); 
    }

    public function findByGenre(int $id)
    {
        $query = $this->pdo->prepare("SELECT produits.nom, produits.prix, produits.imageId, produits.rating FROM `produits` INNER JOIN genres ON genres.id = produits.genreId WHERE genreId = $id");
        $query->execute();
        $result = $query->fetchAll();
    }

    public function findByCategorie(int $id)
    {
        $query = $this->pdo->prepare("SELECT produits.nom, produits.prix, produits.imageId, produits.rating FROM `produits` INNER JOIN categorie ON categorie.id = produits.categorieId WHERE categorieId = $id");
        $query->execute();
        $result = $query->fetchAll();
    }

    public function findByBanniere()
    {
        $query = $this->pdo->prepare("SELECT * FROM banniere WHERE banniere = $id");
        $query->execute();
        return $query->fetchAll();
    }
}