<?php
session_start();
ob_start();
require_once dirname(__DIR__, 1) . "/Symfonyolfactive/libraries/autoload.php";
use Models\Produit;
$votreBanniere = new Produit();
$titrePage = "Accueil"; // Définir le titre de la page actuelle
$bannieres = $votreBanniere->getBannieresByTitrePage($titrePage); ?>
<section class="text-center py-4">
    <h1>SYMPHONIE OLFACTIVE</h1>
    <div class="mt-5">
        <h3 class="text-white">SELECTION PROMOTION</h3>
    </div>

    <div class="d-flex justify-content-center mb-4">
        <?php require_once __DIR__ . "/templates/produits/carousel.php";
        ?>
    </div>
    <div class="container">
        <?php require_once __DIR__ . "/templates/produits/parfums.html.php"; ?>
    </div>

</section>
<div>
    <?php require_once __DIR__ . "/templates/produits/cardsAvis.php";?>
</div>
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
<?php require "template.php";
?>