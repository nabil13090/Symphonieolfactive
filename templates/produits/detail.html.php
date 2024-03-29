<?php
require_once dirname(__DIR__, 2) . "/libraries/autoload.php";

use Models\Detail;
use Models\Produit;

$rating = new Produit;
$parfumDetail = new Detail();
$currentid = $_GET['id'];

$detail = $parfumDetail->find($currentid);

?>
<div class="d-flex justify-content-center my-4  ">
    <div class="card mb-3" style="max-width: 800px;">
        <div class="row g-0  d-flex justify-content-center ">
            <div class=" d-flex justify-content-center mt-4">
                <img src="../../<?= $detail['url'] ?>" style="max-width: 400px;" class="img-fluid rounded rounded border border-black " alt="<?= $detail['nom'] ?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title  text-center "><?= $detail['nom'] ?></h5>
                    <p class="card-text text-center "><strong><?= $detail['description'] ?></strong></p>
                    <p class="card-text  text-center "><?= $detail['prix'] ?> €</p>
                    <div class="ratings d-flex justify-content-center  mx-auto mb-3 ">Note : &nbsp; <?php $rating->getStar($detail['rating']); ?></div>
                    <p class="card-text  text-center "><small class="text-body-secondary"><?= $detail['contenances'] ?> ML</small></p>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto text-white " href="#">Acheter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>