<?php
ob_start(); ?>

        <section class="text-center pt-4 ">
            <h1>SYMPHONIE OLFACTIVE</h1>
        </section>

    <?php 

$titre = "FRAGRANCES ENFANTS";
$content = ob_get_clean(); 
?>

<?php require "template.php"; ?>