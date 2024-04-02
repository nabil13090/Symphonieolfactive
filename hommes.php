<?php
session_start();
ob_start(); ?>
<section class="text-center pt-4 ">
      <h1>SYMPHONIE OLFACTIVE</h1>
</section>
<section class="title">
      <h2 class="text-center my-3 ">SELECTION HOMMES</h2>
</section>
<div class="container px-4 px-lg-5 mt-5 ">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php require_once __DIR__ . "/templates/produits/parfumGenre.html.php";
            ?> </div>
</div>
<?php require_once __DIR__ . "/templates/produits/cardsAvis.php"; ?>
<?php

$img = "assets/background/hommes.jpg";
$titre = "FRAGRANCES HOMMES";
$content = ob_get_clean();
?>
<?php require "template.php"; ?>