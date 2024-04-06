<?php

namespace Models;
use Database;


class Produits extends Model
{
    protected $table = 'produits';

    
    public function findAll()
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table}");

        $query->execute();
        $allProduits = $query->fetchAll();
        return  $allProduits;

    }


    public function findByGenre(int $id)
    {
        $query = $this->pdo->prepare("SELECT produits.nom, produits.prix, produits.imageId, produits.rating FROM `produits` INNER JOIN genres ON genres.id = produits.genreId WHERE genreId = :id");
        $query->execute([':id '=> $id]);
        $byGenre = $query->fetchAll();
        return $byGenre;
    }

    public function findByCategorie(int $id)
    {
        $query = $this->pdo->prepare("SELECT produits.nom, produits.prix, produits.imageId, produits.rating FROM `produits` INNER JOIN categorie ON categorie.id = produits.categorieId WHERE categorieId = $id");
        $query->execute();
        $byCategorie = $query->fetchAll();
        return $byCategorie;
    }

    function insert(array $data){

        $query = $this->pdo->prepare('INSERT INTO produits SET nom = :nom, description = :description, prix = :prix, contenances = :contenances, rating = :rating,
        stock = :stock, created_at = :created_at, genreId = :genreId, imageId = :imageId, categorieId = :categorieId WHERE id = :id');
        $data = [
            ':nom' => !empty($data["nom"]) ? strtoupper($data['nom']) : NULL  ,
            ':description' => htmlspecialchars($data['description']),
            ':prix' => intval($data['prix']),
            ':contenances' => $data['contenances'],
            ':rating' => !empty($data["rating"]) ? $data['rating'] : 2,
            ':stock' => !empty($data["stock"]) ? $data['stock'] : 2,
            ':id' => intval($data['id'])
        ];
        $insert = $query->execute($data); 
        return  $insert;
    }

  


}