<?php
require_once dirname(__DIR__, 2) . "/libraries/autoload.php";

use Models\Detail;

$parfumDetail = new Detail();
$currentid = $_GET['id'];

$detail = $parfumDetail->find($currentid);

?>
<div class="card mb-3">
    <div class="row g-0  d-flex justify-content-center ">
        <div class=" d-flex justify-content-center mt-4">
            <img src="../../<?= $detail['url'] ?>" class="img-fluid" alt="<?= $detail['nom'] ?>">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title  text-center "><?= $detail['nom'] ?></h5>
                <p class="card-text text-center "><?= $detail['description'] ?></p>
                <p class="card-text  text-center "><?= $detail['prix'] ?> €</p>
                <p class="card-text  text-center "><small class="text-body-secondary"><?= $detail['contenances'] ?> ML</small></p>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto text-white me-4" href="#">Acheter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>