<?php
ob_start(); ?>

        <section class="text-center pt-4 ">
            <h1>SYMPHONIE OLFACTIVE</h1>
        </section>
        <section>
        <?php

use Models\Produit;

require_once __DIR__ . "models/Produits.php"; 

$parfumModel = New Produit();

$parfum = $parfumModel->findAll($allProduits);

var_dump($parfum);

foreach( $parfum as $value  ) {?>

<div class="col mb-5">
        <div class="card h-100">
            <img class="card-img-top" src="<?=$value['imageId']?>" alt="..." />
            <div class="card-body p-4">
                <div class="text-center">
                    <h5 class="fw-bolder"><?=$value['nom']?></h5>
                    <span class=" text-decoration"><?=$value['prix']?><i class="bi bi-currency-euro"></i></span>
                </div>
            </div>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ajouté</a></div>
            </div>
        </div>
    </div>
 <?php } ?>
        </section> 
    <?php 

$titre = "FRAGRANCES HOMMES";
$content = ob_get_clean(); 
?>

<?php require "template.php"; ?>