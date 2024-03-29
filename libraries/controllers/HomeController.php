<?php

namespace Controllers;

use Http;
use Renderer;


class HomeController extends Controller
{
    protected $modelProduits;
    
    

    public function __construct()
    {
        $this->modelProduits =  new \Models\Produit();
    }
    

    public function index()
    {
        $produitsCategorie = $this->modelProduits->findByCategorie();
        $avis = $this->modelProduits->findAvis();
        Renderer::render('index.php', $produitsCategorie);
    }
}
