<?php

namespace Models;


class Detail extends Model
{
    protected $table = 'produits';




    public function find(int $id)
    {


        $query = $this->pdo->prepare("SELECT p.*, i.url FROM produits p INNER JOIN image i ON i.id = p.imageId WHERE p.id = :id");
        // On exécute la requête en précisant le paramètre :article_id 
        $query->execute([':id' => $id]);

        // On fouille le résultat pour en extraire les données réelles de l'article
        $item = $query->fetch();

        return $item;
    }

    public function findAdmin(int $id)
    {

        $query = $this->pdo->prepare("SELECT p.id, p.nom as noms, p.description, p.prix, p.rating, p.stock, p.contenances, c.name, g.nom FROM `produits` p
        INNER JOIN genres g ON p.genreId = g.id
        LEFT JOIN categorie c ON p.categorieId = c.id WHERE p.id = :id");
        // On exécute la requête en précisant le paramètre :article_id 
        $query->execute([':id' => $id]);

        // On fouille le résultat pour en extraire les données réelles de l'article
        $item = $query->fetch();

        return $item;
    }

    public function addProduit(int $id)
    {


        $query = $this->pdo->prepare("SELECT p.id, p.nom, p.prix, p.rating, g.nom as `c.name`, p.stock, p.contenances, c.name FROM `produits` p INNER JOIN genres g ON p.genreId = g.id INNER JOIN categorie c ON p.categorieId = c.id WHERE p.id = :id");
        // On exécute la requête en précisant le paramètre :article_id 
        $query->execute([':id' => $id]);

        // On fouille le résultat pour en extraire les données réelles de l'article
        $item = $query->fetch();

        return $item;
    }

    public function  addProductPanier(int $id)
    {
        $cart = $this->find($id);
        // Ajoute le produit au panier
        if (empty($_SESSION['panier']) || !array_key_exists( $id ,$_SESSION['panier'])) {
            $_SESSION['panier'][$id] = array(
                'id' => $cart['id'],
                'nom' => $cart['nom'],
                'contenances' => $cart['contenances'],
                'quantite' => 1, // Initialise la quantité à 1
                'prix' => $cart['prix'],
                'image' => $cart['url']
            );
        } else {
            $_SESSION['panier'][$id]['quantite']++;
        }
    }

    public function updateProduits($id, $data)
    {
        $query = $this->pdo->prepare('UPDATE produits SET nom = :nom, description = :description, prix = :prix, contenances = :contenances, rating = :rating,
         stock = :stock, genreId = :genreId, categorieId = :categorieId
        WHERE id = :id;');

        // Échapper les caractères spéciaux pour éviter les attaques par injection SQL
        $nom = ($data['nom']);
        $description = ($data['description']);

        // Convertir les valeurs en types appropriés
        $prix = floatval($data['prix']);
        $contenances = intval($data['contenances']);
        $rating = floatval($data['rating']);
        $stock = intval($data['stock']);
        $genreId = intval($data['genreId']);
        $categorieId = intval($data['categorieId']);

        // Exécution de la requête
        $query->bindParam(':id', $id);
        $query->bindParam(':nom', $nom);
        $query->bindParam(':description', $description);
        $query->bindParam(':prix', $prix);
        $query->bindParam(':contenances', $contenances);
        $query->bindParam(':rating', $rating);
        $query->bindParam(':stock', $stock);
        $query->bindParam(':genreId', $genreId);
        $query->bindParam(':categorieId', $categorieId);

        $update = $query->execute();
        return $update;
    }


    public function findCategorie()
    {
        $query = $this->pdo->prepare("SELECT * FROM `categorie`");

        $query->execute();
        $nameCategorie = $query->fetchAll();
        return  $nameCategorie;
    }
    
    public function findGenre()
    {
        $query = $this->pdo->prepare("SELECT nom, id FROM `genres`;");

        $query->execute();
        $allProduits = $query->fetchAll();
        return  $allProduits;
    }

    public function insertCommande($user_id, $date_create, $staut, $price)
    {
        $query = $this->pdo->prepare('INSERT INTO commande (user_id, date_create, staut, price) VALUES (:user_id, :date_create, :staut, :price)');

        // Échapper les caractères spéciaux pour éviter les attaques par injection SQL
        $user_id = intval($user_id);
        $date_create = htmlspecialchars($date_create);
        $staut = htmlspecialchars($staut); // Utilisez htmlspecialchars si nécessaire
        $price = floatval($price);

        // Exécution de la requête
        $query->bindParam(':user_id', $user_id);
        $query->bindParam(':date_create', $date_create);
        $query->bindParam(':staut', $staut);
        $query->bindParam(':price', $price);

        $inserted = $query->execute();

        return $inserted;
    }

    public function getCommande($commande_id, $produits_id, $quantite)
    {

       
        $query = $this->pdo->prepare("INSERT INTO `commande_produits`(`commande_id`, `produits_id`, `quantite`) VALUES ( :commande_id, :produits_id, :quantite)");

        $commande_id = intval($commande_id);
        $produits_id = intval($produits_id);       // Utilisez htmlspecialchars si nécessaire
        $quantite = floatval($quantite);

        // Exécution de la requête
        $query->bindParam(':commande_id', $commande_id);
        $query->bindParam(':produits_id', $produits_id);
        $query->bindParam(':quantite', $quantite);


        $cart = $query->execute();

        return $cart;
    }
}



