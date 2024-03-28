<?php

namespace Controllers;


use Http;
use Renderer;


class Produit extends Controller
{
    protected $modelName = \Models\Produit::class;

    public function  index()
    {
        $produitByGenre = $this->model->findByGenre();
    }
}