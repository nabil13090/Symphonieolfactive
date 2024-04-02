<?php
namespace Controllers;

use Controllers\Controller;
use Models\Detail;

class Panier extends Controller
{
    
    protected $parfumDetail;

    public function __construct(){
        $this->parfumDetail = new \Models\Detail();
    }


    public function  addProductPanier(int $id)
    {
        $cart = $this->parfumDetail->find($id);
        // Ajoute le produit au panier
        if (!isset($_SESSION['panier']['id'])) {
            $_SESSION['panier']['id'] = array(
                'id' => $cart['id'],
                'nom' => $cart['nom'],
                'contenances' => $cart['contenances'],
                'quantite' => 1, // Initialise la quantité à 1
                'prix' => $cart['prix'],
                'image' => $cart['url']
            );
        } else {
            // Incrémente la quantité si le produit est déjà dans le panier
            $_SESSION['panier']['id']['quantite']++;
        }
       
    }
    }



