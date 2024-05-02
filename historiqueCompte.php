<?php session_start();
ob_start(); ?>
<section class="text-center pt-5">
    <h1 class="mb-3">SYMPHONIE OLFACTIVE</h1>
    <h3>Le compte de <strong><?php echo ucfirst($_SESSION["nom"]) ?></h3>
</section>
<div class="container py-5 mb-5">
    <?php require_once __DIR__ . "/templates/produits/tableauCompte.php"; ?>
</div>
<?php require_once __DIR__ . "/templates/produits/cardsAvis.php"; ?>
<?php
$title = "Mon Espace";
$img = "assets/background/moncompte.jpg";
$titre = "";
$content = ob_get_clean(); ?>
<?php require "template.php"; ?>