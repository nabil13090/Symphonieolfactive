<?php ob_start() ?>


     <section class="text-center pt-4 ">
            <h1>SYMPHONIE OLFACTIVE</h1>
            <div class="mb-3">
                <h3>SELECTION PROMOTION</h3>
            </div>
        </section>
 

<?php 
$img = "assets/background/accueil2.jpg";
$titre = "BIENVENUE";
$content = ob_get_clean(); 
?>

<?php require "template.php"; ?>