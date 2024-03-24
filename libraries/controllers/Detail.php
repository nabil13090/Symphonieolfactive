<?php

namespace Controllers;

use entity\Produits;
use Http;
use Renderer;


class Detail extends Controller
{
    protected $modelName = \Models\Detail::class;

    public function show()
    {
        $produits = $this->model->find();
        Renderer::render('produits/detail.html.php', compact( 'produits'));
    }
}