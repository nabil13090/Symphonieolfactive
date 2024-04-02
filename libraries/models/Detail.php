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
}
