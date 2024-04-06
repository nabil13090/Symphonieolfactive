<?php

ob_start(); ?>
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
$title = "Panier";
$img = "assets/background/panier.jpg";
$titre = "";
$content = ob_get_clean();
?>

<?php require "template.php"; ?>