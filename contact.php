<?php ob_start(); ?>
<section class="text-center pt-4 ">
    <h1>SYMPHONIE OLFACTIVE</h1>
</section>
<?php require_once __DIR__ . "/templates/fomulaires/contact.form.php";
?>
<div class="w-100">
    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.8307187275473!2d5.446026211920922!3d43.52672266048106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c98d97d11a67cb%3A0x39efbc9209cf7a83!2sCr%20Mirabeau%2C%2013100%20Aix-en-Provence!5e0!3m2!1sfr!2sfr!4v1710842056484!5m2!1sfr!2sfr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php
$img = "assets/background/contact.jpg";
$titre = "CONTACTEZ - NOUS";
$content = ob_get_clean();
?>
<?php require "template.php"; ?>