<?php
ob_start();
require_once dirname(__DIR__, 1) . "/Symfonyolfactive/libraries/autoload.php";

use Models\Produit;

$votreObjet = new Produit();
$titrePage = "Contact"; // Définir le titre de la page actuelle
$bannieres = $votreObjet->getBannieresByTitrePage($titrePage);
 ?>
<section class="text-center pt-4 ">
    <h1>SYMPHONIE OLFACTIVE</h1>
</section>
<?php require_once __DIR__ . "/templates/fomulaires/contact.form.php";
?>
<div>
    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.8307187275473!2d5.446026211920922!3d43.52672266048106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c98d97d11a67cb%3A0x39efbc9209cf7a83!2sCr%20Mirabeau%2C%2013100%20Aix-en-Provence!5e0!3m2!1sfr!2sfr!4v1710842056484!5m2!1sfr!2sfr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php
$title = ""; // Initialisez le titre
$img = ""; // Initialisez l'image
$titre = ""; // Initialisez le titre du message

// Vérifiez s'il y a des bannières récupérées
if (!empty($bannieres)) {
    // Utilisez les valeurs de la première bannière pour les variables de la template
    $title = $bannieres[0]['TitrePage'];
    $img = $bannieres[0]['Image'];
    $titre = $bannieres[0]['Message'];
}
$content = ob_get_clean();
?>
<?php require "template.php"; ?>