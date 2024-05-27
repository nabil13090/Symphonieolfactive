<?php

namespace Controllers;
use Models\Detail;
use Http;
use Renderer;

class HomeController extends Controller
{
    protected $carouselProduits;
    protected $avisProduits;
    
/**
 * Le constructeur initialise deux instances de la classe Produit et appelle des méthodes spécifiques
 * sur chaque instance.
 */
    public function __construct()
    {
        $this->carouselProduits =  new \Models\Produit();
        $this->carouselProduits->findByCategorie();
        $this->avisProduits = new \Models\Produit();
        $this->avisProduits->findAvis();
    }

/**
 * La fonction « caroussel » récupère les produits par catégorie et restitue un modèle de carrousel.
 */
    public function caroussel()
    {
        $carouselProduits =  $this->carouselProduits;
        $parfumGenre = $this->carouselProduits->findByCategorie(1);
       require_once dirname(__DIR__, 2) . "/templates/produits/index.php";
    }

/**
 * La fonction « avis » récupère les avis sur les produits et les restitue dans un fichier modèle pour
 * affichage.
 */
    public function avis()
    {
        $avisProduits =  $this->avisProduits;
        $avis = $this->avisProduits->findAvis();
        require_once dirname(__DIR__, 2) . "/templates/produits/index.php";
    }
}
