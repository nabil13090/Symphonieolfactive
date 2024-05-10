<?php session_start();
ob_start();
if (!isset($_SESSION['id'])) {
    // Rediriger vers la page de connexion s'il n'est pas connecté
    header("Location: ../monespace");
    exit();
}
require_once dirname(__DIR__, 1) . "/Symfonyolfactive/libraries/autoload.php";

use Models\Produit;

$votrebannieres = new Produit();
$titrePage = "Historique Compte"; // Définir le titre de la page actuelle
$bannieres = $votrebannieres->getBannieresByTitrePage($titrePage); ?>
<section class="text-center pt-5">
    <h1 class="mb-3">SYMPHONIE OLFACTIVE</h1>
    <h3>Le compte de <strong><?php echo ucfirst($_SESSION["nom"]) ?></h3>
</section>
<div class="container py-5 mb-5">
    <?php require_once __DIR__ . "/templates/produits/tableauCompte.php"; ?>
</div>
<?php require_once __DIR__ . "/templates/produits/cardsAvis.php"; ?>
<?php
$title = ""; // Initialisez le titre
$img = ""; // Initialisez l'image
$titre = "Mon Compte"; // Initialisez le titre du message

// Vérifiez s'il y a des bannières récupérées
if (!empty($bannieres)) {
    // Utilisez les valeurs de la première bannière pour les variables de la template
    $title = $bannieres[0]['TitrePage'];
    $img = $bannieres[0]['Image'];
    $titre = $bannieres[0]['Message'];
}

$content = ob_get_clean(); ?>
<?php require "template.php"; ?>