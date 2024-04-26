<?php
require_once dirname(__DIR__, 2) . "/libraries/autoload.php";

use Models\Produit;

$parfums = new Produit();
$parfum = $parfums->findByCategorie();
?>
<div class="card bg-light">
    <div class="row">
        <div class="col-md-6 p-4">
            <h5 class=" my-4 display-6 ">Nos Fragrances</h5>
            <p>Explorez notre collection exclusive de parfums de marques renommées telles que <strong>Symphonie Olfactive</strong>, où chaque flacon incarne
                l'essence même du raffinement et de l'élégance. Que vous recherchiez un parfum frais pour les journées ensoleillées,
                une fragrance envoûtante pour les soirées romantiques,
                ou un cadeau parfait pour un être cher, vous trouverez votre précieux trésor olfactif parmi nos rayons virtuels.
                “<strong>Symphonie Olfactive</strong>, la fragrance qui unit. Notre marque de parfum crée des liens indéfectibles au sein de la famille.
                Chaque parfum est conçu avec amour et soin, capturant l’essence de la joie familiale. Des notes douces pour maman, des touches robustes pour papa,
                et des arômes joyeux pour les enfants. <strong>Symphonie Olfactive</strong>, le parfum de l’amour familial.”
                <strong>Symphonie Olfactive</strong>, le parfum qui célèbre la famille. Nous créons des parfums qui évoquent les moments précieux passés ensemble.
                Des notes florales pour la mère, des arômes boisés pour le père, et des senteurs fruitées
                pour les enfants. <strong>Symphonie Olfactive</strong>, l’essence de la vie en famille.
                <strong>Symphonie Olfactive</strong>, le parfum qui raconte votre histoire. Nos parfums sont comme des chapitres d’un livre,
                chaque note raconte une partie de l’histoire de votre famille. Des notes épicées pour le père, des arômes
                floraux pour la mère,
                et des senteurs sucrées pour les enfants. <strong>Symphonie Olfactive</strong>, le parfum de votre histoire.
            </p>
            <button type="button" class="btn btn-primary btn-lg btn-block mt-5 "><a class=" text-decoration-none text-white" href="/detail?id=<?= $value['id'] ?>">FRAGRANCES</a></button>
        </div>
        <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators circle-indicators z-1">
                    <?php foreach ($parfum as $key => $value) { ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $key ?>" <?php if ($key === 0) echo 'class="active"'; ?> aria-label="Slide <?= $key + 1 ?>"></button>
                    <?php } ?>
                </div>
                <div class="carousel-inner">
                    <?php foreach ($parfum as $key => $value) { ?>
                        <div class="carousel-item <?php if ($key === 0) echo 'active'; ?>">
                            <img src="../../<?= $value['url'] ?>" class="w-100" style="max-width: 100%; height: auto;" alt="photo de <?= $value['nom'] ?>">
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>