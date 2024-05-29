<?php
require_once dirname(__DIR__, 2) . "/libraries/autoload.php";


use Models\Produit;

$mesAvis = new Produit();
$avis = $mesAvis->findAvis();
?>
<div class="container mt-5 mb-6" style="max-width: 1200px; margin-bottom: 3rem;">
    <h3 class="text-center my-4">LES AVIS CLIENTS</h3>
    <div class="d-flex flex-wrap justify-content-center">
        <?php foreach ($avis as $value) { ?>
            <div class="card p-2 py-3 text-center m-2" style="width: 200px;">
                <div class="img mb-2 ratio ratio-1x1">
                    <img src="../../<?= $value['image'] ?>" class="rounded-circle img-fluid object-fit-cover" alt="<?= $value['nom'] ?>">
                </div>
                <h5 class="mb-0"><?= $value['nom'] ?></h5>
                <div class="ratings d-flex mx-auto"><?php $mesAvis->getStar($value['rating']); ?></div>
                <div class="mt-1 apointment">
                    <p><?= $value['desciption'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>