<?php
namespace Models;

class Produit extends Model
{
    protected $table = 'produits';

    public function findAll()
    {
        $query = $this->pdo->prepare("SELECT p.*, i.url FROM produits p INNER JOIN image i ON i.id = p.imageId;");

        $query->execute();
        $allProduits = $query->fetchAll();
        return  $allProduits;
    }

    public function findGenre()
    {
        $query = $this->pdo->prepare("SELECT nom, id FROM `genres`;");

        $query->execute();
        $allProduits = $query->fetchAll();
        return  $allProduits;
    }

    public function findProduitsByGenre(int $id)
    {
        $query = $this->pdo->prepare("SELECT p.id, p.nom, p.description, p.prix, p.rating, i.url, p.genreId FROM `produits` p INNER JOIN image i ON p.imageId = i.id WHERE p.genreId = :id");
        $query->execute([':id'=> $id]);
        $byGenre = $query->fetchAll();
        return $byGenre;
    }

    public function findByCategorie()
    {
        $query = $this->pdo->prepare("SELECT p.*, i.url FROM produits p INNER JOIN image i ON i.id = p.imageId WHERE categorieId = '1'");
        $query->execute();
        $byCategorie = $query->fetchAll();
        return $byCategorie;
    }

    public function findAvis()
    {
        $query = $this->pdo->prepare("SELECT * FROM `avis`;");

        $query->execute();
        $allAvis = $query->fetchAll();
        return  $allAvis;
    }

    function getStar ($rating) {

        $starRating = round($rating/2,1);
        $ratingInt = explode(".", $starRating);
    
        for ($i=0; $i < $ratingInt[0] ; $i++) {
            echo '<div class="bi-star-fill text-black "></div>';
        }
        if ($ratingInt[1] != 0) {
            echo '<div class="bi-star-half text-black"></div>';
        }
        if (5 - $starRating >= 1) {
            echo '<div class="bi-star text-black"></div>';
        }
    }

    // public function allGenre()
    // {
    //     $query = $this->pdo->prepare("SELECT * FROM genres");
    //     $query->execute();
    //     $byGenre =  $query->fetchAll();
    //     return  $byGenre;
    // }
}


