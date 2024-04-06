<?php
session_start();
ob_start(); ?>
<section class="text-center py-4">
    <h1>SYMPHONIE OLFACTIVE</h1>
    <div class="mt-5">
        <h3 class="text-white">SELECTION PROMOTION</h3>
    </div>

    <div class="d-flex justify-content-center mb-4">
        <?php require_once __DIR__ . "/templates/produits/carousel.php";
        ?>
    </div>
    <div class="d-flex justify-content-center ">
        <?php require_once __DIR__ . "/templates/produits/parfums.html.php"; ?>
    </div>

</section>
<div>
    <?php require_once __DIR__ . "/templates/produits/cardsAvis.php";
    ?>
</div>

<?php
$title = "Accueil";
$img = "assets/background/accueil2.jpg";
$titre = "LE MONDE OLFACTIF";
$content = ob_get_clean();
?>
<?php require "template.php";
?>