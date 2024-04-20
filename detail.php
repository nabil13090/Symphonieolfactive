<?php session_start();
ob_start(); ?>

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
$title = "Detail";
$img = "assets/background/detail.jpg";
$titre = "DÉTAIL DE PRODUIT";
$content = ob_get_clean();
?>

<?php require "template.php"; ?>