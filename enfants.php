<?php
session_start();
ob_start();
require_once dirname(__DIR__, 1) . "/Symfonyolfactive/libraries/autoload.php";

use Models\Produit;

$votrebannieres = new Produit();
$titrePage = "Enfants"; // Définir le titre de la page actuelle
$bannieres = $votrebannieres->getBannieresByTitrePage($titrePage);
 ?>

<section class="text-center pt-4 ">
  <h1>SYMPHONIE OLFACTIVE</h1>
</section>
<section class="title">
  <h2 class="text-center my-3 ">SELECTION ENFANTS</h2>
</section>
<div class="container px-4 px-lg-5 mt-5 ">
  <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
    <?php require_once __DIR__ . "/templates/produits/parfumGenre.html.php";
    ?> </div>
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