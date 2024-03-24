<?php
namespace Models;

use Controllers\Controller;
use entity\Produits;








class Produit extends Model
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
        $query->execute([':id '=> $id]);
        $byCategorie = $query->fetchAll();
        return $byCategorie;
    }

}


