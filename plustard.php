<?php

if (empty($_GET['page'])) {
    require_once __DIR__ . "/templates/produits/Accueil.php";
    } else {
        switch ($_GET[ 'page' ]) {
            case 'Accueil':
            require_once __DIR__ . "/templates/produits/Accueil.php";
                break;
            case 'hommes':
            require_once __DIR__ . "/templates/produits/parfumGenre.html.php";
                break;
            case 'femmes':
            require_once __DIR__ . "/templates/produits/parfumGenre.html.php";
                break;
            case 'enfants':
            require_once __DIR__ . "/templates/produits/parfumGenre.html.php";
            break;
            case 'contact':
            require_once __DIR__ . "/templates/produits/contact.php";
            break;
            case 'monespace':
            require_once __DIR__ . "/templates/produits/monespace.php";
            break;
            case 'panier':
            require_once __DIR__ . "/templates/produits/panier.php";
            break;
            case 'detail':
            require_once __DIR__ . "/templates/produits/detail.html.php";
            break;
            case 'politiquedeonnées':
            require_once __DIR__ . "/templates/produits/politiquedonnées.php";
            break;
        }
}