<?php
ob_start(); ?>

<section class="text-center pt-4 ">
    <h1>SYMPHONIE OLFACTIVE</h1>
</section>
<?php require_once __DIR__ . "/templates/produits/detail.html.php";?> 
<?php
$img = "assets/background/detail.jpg";
$titre = "DÉTAIL DE PRODUIT";
$content = ob_get_clean();
?>

<?php require "template.php"; ?>