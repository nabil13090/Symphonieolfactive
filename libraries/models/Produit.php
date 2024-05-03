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
        // Supprimez la ligne où vous définissez $created_at
        $created_at = date("Y-m-d H:i:s"); // Récupère la date actuelle au format MySQL

        $query = $this->pdo->prepare('INSERT INTO produits (nom, description, prix, contenances, rating, stock, created_at, imageId, genreId) VALUES (:nom, :description, :prix, :contenances, :rating, :stock, :created_at, :imageId, :genreId)');

        // Échapper les caractères spéciaux pour éviter les attaques par injection SQL
        $nom = htmlspecialchars($data['nom']);
        $description = htmlspecialchars($data['description']);

        // Convertir les valeurs en types appropriés
        $prix = floatval($data['prix']);
        $contenances = intval($data['contenances']);
        $rating = floatval($data['rating']);
        $stock = intval($data['stock']);
        $imageId = intval($data['imageId']);
        $genreId = intval($data['genreId']);

        // Exécution de la requête
        $query->bindParam(':nom', $nom);
        $query->bindParam(':description', $description);
        $query->bindParam(':prix', $prix);
        $query->bindParam(':contenances', $contenances);
        $query->bindParam(':rating', $rating);
        $query->bindParam(':stock', $stock);
        $query->bindParam(':created_at', $created_at); // Utilisation de la date actuelle
        $query->bindParam(':imageId', $imageId);
        $query->bindParam(':genreId', $genreId);

        $insert = $query->execute();
        return $insert;

}

    function insertImage($url)
    {
        $query = $this->pdo->prepare('INSERT INTO `image` (url) VALUES (:url)');
        $query->bindParam(':url', $url);
        $insert = $query->execute();
        if ($insert) {
            // Retourner l'ID de l'image insérée
            return $this->pdo->lastInsertId();
        } else {
            return false;
        }
    }

    function findCompte($id)
    {
        $query = $this->pdo->prepare('SELECT c.*, cp.*, p.*, i.* FROM commande c JOIN commande_produits cp ON c.commande_id = cp.commande_id JOIN produits p ON cp.produits_id = p.id JOIN image i ON p.imageId = i.id WHERE c.user_id = :id');
        $query->execute(['id' => $id]);
        $find = $query->fetchAll();
        return $find;
    }


  





}


