<?php



require_once dirname(__DIR__, 2) . "/libraries/autoload.php";

use Models\Produit;

$parfums = new Produit();

$parfum = $parfums->findAll();

$parfum = $value ?>
<div class="text-center" style="max-width: 900px; max-height:600px;">
    <div class=" row no-gutters bg-light position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
            <img src="../../<?= $value['url'] ?>" class="w-100" alt="photo de <?= $value['nom'] ?>">
        </div>
        <div class="col-md-6 position-static p-4 pl-md-0 ">
            <h5 class="mt-4">Nos Fragrances</h5>
            <p class="mt-4">Explorez notre collection exclusive de parfums de marques renommées telles que <strong>Symphonie Olfactive</strong>, où chaque flacon incarne
                l'essence même du raffinement et de l'élégance. Que vous recherchiez un parfum frais pour les journées ensoleillées,
                une fragrance envoûtante pour les soirées romantiques,
                ou un cadeau parfait pour un être cher, vous trouverez votre précieux trésor olfactif parmi nos rayons virtuels.</p>
        </div>
    </div>
</div>