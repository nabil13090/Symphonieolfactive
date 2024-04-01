<?php

namespace Controllers;

use Models\Detail;
use Http;
use Renderer;


class HomeController extends Controller
{
    protected $carouselProduits;
    protected $avisProduits;
    
    

    public function __construct()
    {
        $this->carouselProduits =  new \Models\Produit();
        $this->carouselProduits->findByCategorie();
        $this->avisProduits = new \Models\Produit();
        $this->avisProduits->findAvis();
    }

    

    public function caroussel()
    {
        $carouselProduits =  $this->carouselProduits;
        $parfumGenre = $this->carouselProduits->findByCategorie(1);
       require_once dirname(__DIR__, 2) . "/templates/produits/index.php";
    }

    public function avis()
    {
        $avisProduits =  $this->avisProduits;
        $avis = $this->avisProduits->findAvis();
        require_once dirname(__DIR__, 2) . "/templates/produits/index.php";
    }
}
