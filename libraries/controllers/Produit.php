<?php

namespace Controllers;

use entity\Produits;
use Http;
use Renderer;


class Produit extends Controller
{
    protected $modelName = \Models\Produits::class;

    public function  index()
    {
        $produitByGenre = $this->model->findByGenre();
    }
}