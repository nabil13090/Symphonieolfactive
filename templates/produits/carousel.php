<?php
require_once dirname(__DIR__, 2) . "/libraries/autoload.php";

use Models\Produit;

$parfums = new Produit();
$parfumGenre = $parfums->findByCategorie(1);

?>
<section class="pt-2 pb-2 w-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $numItems = count($parfumGenre);
                        $i = 0;
                        $active = 'active'; // variable pour gérer la classe active
                        foreach ($parfumGenre as $value) {
                            if ($i % 4 == 0) { // Début d'un nouvel élément de carrousel
                                echo '<div class="carousel-item ' . $active . '"><div class="row">';
                                $active = ''; // On enlève la classe active après le premier élément
                            }
                        ?>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="../../<?= $value['url'] ?>">
                                    <div class="card-body">
                                        <h4 class="card-title"><?= $value['nom'] ?></h4>
                                        <div class="ratings d-flex justify-content-center  mx-auto mb-2 ">Note : &nbsp; <?php $parfums->getStar($value['rating']); ?></div>
                                        <p class="card-text"><?= $value['prix'] ?>&nbsp;€</p>
                                    </div>
                                </div>
                            </div>
                        <?php
                            if ($i % 4 == 3 || $i == $numItems - 1) { // Fin d'un élément de carrousel
                                echo '</div></div>';
                            }
                            $i++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>