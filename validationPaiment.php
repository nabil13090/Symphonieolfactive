<?php session_start();
ob_start();
require_once dirname(__DIR__, 1) . "/Symfonyolfactive/libraries/autoload.php";

use Models\Produit;

$votrebannieres = new Produit();
$titrePage = "Transaction"; // Définir le titre de la page actuelle
$bannieres = $votrebannieres->getBannieresByTitrePage($titrePage); ?>
<section class="text-center pt-4 mb-5">
    <h1 class="mb-2">SYMPHONIE OLFACTIVE</h1>
    <h3>Transaction Validée</h3>
    <?php require_once __DIR__ . "/templates/produits/validation.php"; ?>
</section>
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