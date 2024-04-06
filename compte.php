<?php ob_start(); ?>
<section class="text-center pt-4">
    <h1>SYMPHONIE OLFACTIVE</h1>
</section>
<div class="container py-5 mb-5 ">
    <div class="row">
        <aside class="col-12 col-md-4">
            <section>
                <h2 class="mb-5 mt-sm-4">Nos coordonnées</h2>
                <h3 class="mb-1">Symphonie Olfactive</h3>
                <address>
                    7 cours Mirabeau<br>
                    13100 Aix en Provence
                </address>

                <h3 class="mt-4 mb-1">Téléphone</h3>
                <address>
                    <a href="tel:+33559478418" class="text-black text-decoration-none">06 95 80 08 18</a>
                </address>

                <h3 class="mt-4 mb-1">Horaires</h3>
                <p>
                    Du lundi au vendredi<br>
                    de 8h à 14h, de 16h à 21h<br>
                    Le samedi<br>
                    de 10h à 13h
                </p>
                <h3 class="mt-4 mb-1">Email</h3>
                <address>
                    <a href="" class="text-black text-decoration-none">Symphonie@olfactive.com</a><br>
                    ou via ce formulaire
                </address>
            </section>
        </aside>
        <section class="contact col-12 col-sm-8">
            <h6 class="text-primary">Première fois chez Symphonie olfactive ?</h6>
            <h2 class="mb-5 mt-4">Formulaire d'inscription</h2>
            <div class="container g-0">
                <?php require_once __DIR__ . "/templates/fomulaires/inscription.form.php"; ?>
            </div>
        </section>
    </div>
</div>
<?php require_once __DIR__ . "/templates/produits/cardsAvis.php"; ?>
<?php
$title = "Creation Compte";
$img = "assets/background/compte.jpg";
$titre = "ESPACE CREATION";
$content = ob_get_clean(); ?>
<?php require "template.php"; ?>