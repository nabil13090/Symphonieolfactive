<?php ob_start(); ?>


<section class="text-center pt-4">
    <h1>SYMPHONIE OLFACTIVE</h1>
</section>
<div class="container py-5 mb-5 ">
    <div class="row">
        <?php require_once __DIR__ . "/templates/fomulaires/connexion.form.php"; ?>
    </div>
    <div class="row justify-content-around">
        <a class="text-decoration-none " href="/compte.php">
            <h6 class="text-primary ">Première fois chez Symphonie olfactive ?</h6>
        </a>
    </div>
</div>
<?php require_once __DIR__ . "/templates/produits/cardsAvis.php"; ?>
<?php
$img = "assets/background/monespace.jpg";
$titre = "MON ESPACE";
$content = ob_get_clean(); ?>
<?php require "template.php"; ?>