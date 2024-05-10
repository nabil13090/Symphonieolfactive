<?php session_start();
ob_start();
require_once dirname(__DIR__, 1) . "/Symfonyolfactive/libraries/autoload.php";

use Models\Produit;

$votrebannieres = new Produit();
$titrePage = "Detail"; // Définir le titre de la page actuelle
$bannieres = $votrebannieres->getBannieresByTitrePage($titrePage);
 ?>
<section class="text-center pt-4 ">
    <h1>SYMPHONIE OLFACTIVE</h1>
    <div class="mt-5">
        <h3 class="text-white">PRESENTATION DU PARFUM</h3>
    </div>
</section>
<?php require_once __DIR__ . "/templates/produits/detail.html.php"; ?>
<div class="mt-3">
    <h3 class="text-center">SELECTION PROMOTION</h3>
</div>
<div class="d-flex justify-content-center">
    <?php require_once __DIR__ . "/templates/produits/carousel.php";
    ?>
</div>
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

<?php require "template.php"; ?>