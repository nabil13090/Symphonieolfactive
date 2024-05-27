<?php session_start();
ob_start();
require_once dirname(__DIR__, 1) . "/Symfonyolfactive/libraries/autoload.php";

use Models\Produit;

$votrebannieres = new Produit();
$titrePage = "Mon Espace";
$bannieres = $votrebannieres->getBannieresByTitrePage($titrePage); ?>
<section class="text-center pt-4">
    <h1>SYMPHONIE OLFACTIVE</h1>
</section>
<div class="container py-5 mb-5">
    <div class="row">
        <?php require_once __DIR__ . "/templates/fomulaires/connexion.form.php"; ?>
    </div>
    <div class="row justify-content-around">
        <a class="text-decoration-none " href="/compte">
            <h6 class="text-primary ">Première fois chez Symphonie olfactive ?</h6>
        </a>
    </div>
</div>
<?php require_once __DIR__ . "/templates/produits/cardsAvis.php"; ?>
<?php
$title = ""; // Initialisez le titre
$img = ""; // Initialisez l'image
$titre = ""; // Initialisez le titre du message

// Vérifiez s'il y a des bannières récupérées
if (!empty($bannieres)) {
    // Utilisez les valeurs de la première bannière pour les variables de la template
    $title = $bannieres[0]['TitrePage'];
    $img = $bannieres[0]['Image'];
    $titre = $bannieres[0]['Message'];
}

$content = ob_get_clean(); ?>
<?php require "template.php"; ?>