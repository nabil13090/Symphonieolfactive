<?php session_start();
ob_start();
require_once dirname(__DIR__, 1) . "/Symfonyolfactive/libraries/autoload.php";

use Models\Produit;

$votrebannieres = new Produit();
$titrePage = "Politique des données"; // Définir le titre de la page actuelle
$bannieres = $votrebannieres->getBannieresByTitrePage($titrePage);
?>
<section class="text-center pt-4 mb-5">
    <h1 class="mb-2">SYMPHONIE OLFACTIVE</h1>
    <h2 class="mt-5 text-white">CONDITIONS GÉNÉRALES DE VENTE</h2>
    <p class="text-center px-5 mt-4">Les présentes conditions générales de vente ont pour objet, d'une part, d'informer tout éventuel consommateur sur les conditions et modalités dans lesquelles le vendeur procède à la vente et à la livraison des produits commandés et, d'autre part, de définir les droits et obligations des parties dans le cadre de la vente de produits par le vendeur au consommateur. Elles s'appliquent, sans restriction ni réserve, à l'ensemble des ventes, par la société Symphonie Olfactive, des produits proposés sur son site Internet. En conséquence, le fait pour toute personne de commander un produit proposé à la vente sur le site Internet de la société Symphonie Olfactive emporte acceptation pleine et entière des présentes conditions générales de vente dont l'Acheteur reconnaît avoir pris connaissance préalablement à sa commande.
        Nous assurons les livraisons en France métropolitaine (Monaco et Corse inclus) ainsi que dans les pays de l’Union Européenne (Hors DROM COM, Royaume-Uni, Suisse, Chypre et Malte). Les DROM COM ne font pas partie du périmètre de livraison.
        L'Acheteur préalablement à sa commande, déclare que :
        - L'achat de produits de la société Symphonie Olfactive est sans rapport direct avec son activité professionnelle et est limité à une utilisation strictement personnelle ;
        - Avoir la pleine capacité juridique, lui permettant de s'engager au titre des présentes conditions générales de vente.
        La société Symphonie Olfactive se réserve le droit de modifier à tout moment les présentes conditions générales de vente. Les CGV applicables sont celles en vigueur au jour de la commande de l'Acheteur.</p>
    <h2 class="mb-5 px-5">Garanties légales</h2>
    <p class="text-center px-5 mt-4">Symphonie Olfactive est responsable de plein droit de l’exécution de ses obligations en vertu des présentes. Symphonie Olfactive sera tenue responsable des dommages directes et prévisibles qui sont le résultat d’un manquement aux présentes Conditions, à l’exclusion de tous les dommages indirectes, incidents, non expressément prévus ou normalement prévisibles au moment de la conclusion du contrat.
        Symphonie Olfactive s'engage à décrire avec la plus grande exactitude les produits vendus sur son site Internet.
        Toutefois, la responsabilité d’ Symphonie Olfactive ne pourra être engagée dans le cas où l'inexécution de ses obligations serait imputable soit au fait imprévisible et insurmontable d'un tiers au contrat soit à un cas de force majeure telle que définie à l’article 1218 du Code civil. .
        La responsabilité d’ Symphonie Olfactive ne saurait non plus être engagée pour tous les inconvénients ou dommages inhérents à l'utilisation du réseau Internet, notamment une rupture de service, une intrusion extérieure ou la présence de virus informatiques.
        Symphonie Olfactive ne saurait être responsable de toutes pertes de données, fichiers. Il appartient à l'Acheteur de procéder à toutes les sauvegardes nécessaires. Le site Symphonie Olfactive contient également des informations provenant de tierces personnes, et des liens vers d'autres sites Internet.
        Symphonie Olfactive ne pourra en aucun cas être tenue pour responsable des dommages résultant de l'utilisation, de l'accès à, ou de l'incapacité à utiliser ces informations tierces, ni au contenu des autres sites Internet.</p>
</section>
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