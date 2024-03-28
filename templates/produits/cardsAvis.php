<?php
require_once dirname(__DIR__, 2) . "/libraries/autoload.php";
use Models\Produit;
$mesAvis = new Produit();
$avis = $mesAvis->findAvis();
?>
<div class="container mt-5 mb-5 border border-black rounded rounded ">
    <h3 class="text-center my-4">LES AVIS CLIENTS</h3>
    <div class="row mb-5 ">
        <div class="d-flex justify-content-around  gap-5 ">
            <?php foreach ($avis as $value) { ?>
                <div class="card p-2 py-3 text-center " style="width: 200px;">
                    <div class="img mb-2 ratio ratio-1x1 ">
                        <img src="../../<?= $value['image'] ?>" class="rounded-circle img-fluid object-fit-cover " alt="<?= $value['nom'] ?>">
                    </div>
                    <h5 class="mb-0"><?= $value['nom'] ?></h5>
                    <div class="ratings d-flex mx-auto"><?php $mesAvis->getStar($value['rating']);?></div>
                    <div class="mt-1 apointment">
                        <p><?= $value['desciption'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>