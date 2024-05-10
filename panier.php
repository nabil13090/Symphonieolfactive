<?php session_start();
ob_start();
if (!isset($_SESSION['id'])) {
    // Rediriger vers la page de connexion s'il n'est pas connecté
    header("Location: monespace");
    exit();
}
require_once dirname(__DIR__, 1) . "/Symfonyolfactive/libraries/autoload.php";

use Models\Produit;

$votrebannieres = new Produit();
$titrePage = "Panier"; // Définir le titre de la page actuelle
$bannieres = $votrebannieres->getBannieresByTitrePage($titrePage); ?>
<section class="text-center pt-4 ">
    <h1>SYMPHONIE OLFACTIVE</h1>
</section>
<div class="container py-5 mb-5 ">
    <section class="h-100 h-custom">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <h2 class="mb-3">VOTRE PANIER</h2>
                <div class="col">
                    <?php require_once __DIR__ . "/templates/fomulaires/panier.form.php"; ?>
                </div>
            </div>
        </div>
    </section>
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

$content = ob_get_clean();
?>
<?php require "template.php"; ?>