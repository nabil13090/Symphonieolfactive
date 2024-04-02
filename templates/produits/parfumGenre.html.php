<?php
require_once dirname(__DIR__, 2) . "/libraries/autoload.php";

use Models\Produit;

$parfums = new Produit();
$currentid = $_GET['id'];
$parfum = $parfums->findProduitsByGenre($currentid);
foreach ($parfum as $value) { ?>
    <div class="col mb-5">
        <div class="card h-100">
            <img class="card-img-top img-fluid " src="../../<?= $value['url'] ?>" alt="photo de <?= $value['nom'] ?>" />
            <div class="card-body p-4">
                <div class="text-center">
                    <h5 class="fw-bolder"><?= $value['nom'] ?></h5>
                    <div class="ratings d-flex justify-content-center  mx-auto">Note : &nbsp; <?php $parfums->getStar($value['rating']); ?></div>
                    <span class=" text-decoration"><?= $value['prix'] ?><i class="bi bi-currency-euro"></i></span>
                </div>
            </div>
            <div class="card-footer my-4 pt-0 border-top-0 bg-transparent ">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto text-white me-4 mb-sm-3 my-3" href="/panier.php?id=<?= $value['id'] ?>">Ajout rapide</a>
                    <a class="btn btn-outline-dark mt-auto  text-white mb-sm-3 " href="/detail.php?id=<?= $value['id'] ?>">Details</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>