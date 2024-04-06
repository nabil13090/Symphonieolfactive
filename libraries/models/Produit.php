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




    public function findAdminProduits()
    {
        $query = $this->pdo->prepare("SELECT p.id, p.nom, p.prix, p.rating, g.nom as name, p.stock, p.contenances FROM `produits` p INNER JOIN genres g ON p.genreId = g.id");

        $query->execute();
        $parfum = $query->fetchAll();
        return  $parfum; 
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


    public function  delete(int $id)
    {
        $query = $this->pdo->prepare("DELETE FROM produits WHERE id = :id");
        $query->execute(['id' => $id]);
        header('Location: parfum.php');
    }


    public function insert($data)
    {
        $query = $this->pdo->prepare('INSERT INTO produits (nom, description, prix, contenances, rating, stock, created_at, genreId, imageId, categorieId) VALUES (:nom, :description, :prix, :contenances, :rating, :stock, :created_at, :genreId, :imageId, :categorieId)');

        // Échapper les caractères spéciaux pour éviter les attaques par injection SQL
        $nom = htmlspecialchars($data['nom']);
        $description = htmlspecialchars($data['description']);

        // Convertir les valeurs en types appropriés
        $prix = floatval($data['prix']);
        $contenances = intval($data['contenances']);
        $rating = floatval($data['rating']);
        $stock = intval($data['stock']);
        $created_at = htmlspecialchars($data['created_at']);
        $genreId = intval($data['genreId']);
        $imageId = intval($data['imageId']);
        $categorieId = intval($data['categorieId']);

        // Exécution de la requête
        $query->bindParam(':nom', $nom);
        $query->bindParam(':description', $description);
        $query->bindParam(':prix', $prix);
        $query->bindParam(':contenances', $contenances);
        $query->bindParam(':rating', $rating);
        $query->bindParam(':stock', $stock);
        $query->bindParam(':created_at', $created_at);
        $query->bindParam(':genreId', $genreId);
        $query->bindParam(':imageId', $imageId);
        $query->bindParam(':categorieId', $categorieId);

        $insert = $query->execute();
        return $insert;
    }

 





}


