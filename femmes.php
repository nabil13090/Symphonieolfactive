<?php
ob_start(); ?>

        <section class="text-center pt-4 ">
            <h1>SYMPHONIE OLFACTIVE</h1>
        </section>

    <?php 

$img = "assets/background/femmes.jpg";
$titre = "FRAGRANCES FEMMES";
$content = ob_get_clean(); 
?>

<?php require "template.php"; ?>