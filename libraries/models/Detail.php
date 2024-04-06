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
        $query = $this->pdo->prepare('UPDATE produits SET nom = :nom, description = :description, prix = :prix, contenances = :contenances, rating = :rating, stock = :stock, created_at = :created_at, genreId = :genreId, imageId = :imageId, categorieId = :categorieId WHERE id = :id;');

        // Échapper les caractères spéciaux pour éviter les attaques par injection SQL
        $nom = htmlspecialchars($data['nom']);
        $description = htmlspecialchars($data['description']);

        // Convertir les valeurs en types appropriés
        $prix = floatval($data['prix']);
        $contenances = intval($data['contenances']);
        $rating = floatval($data['rating']);
        $stock = intval($data['stock']);
        $created_at = floatval($data['created_at']);
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

        $update = $query->execute(['id' => $id]);
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

}

