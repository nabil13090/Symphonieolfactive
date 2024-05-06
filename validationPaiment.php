<?php session_start();
ob_start() ?>
<section class="text-center pt-4 mb-5">
    <h1 class="mb-2">SYMPHONIE OLFACTIVE</h1>
    <h3>Transaction Valider</h3>
    <?php require_once __DIR__ . "/templates/produits/validation.php"; ?>
</section>
<?php
$title = "";
$img = "assets/background/transaction.jpg";
$titre = "";
$content = ob_get_clean();
?>
<?php require "template.php"; ?>