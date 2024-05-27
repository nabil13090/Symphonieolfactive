<?php
require_once dirname(__DIR__, 2) . "/libraries/autoload.php";

/* L'extrait de code que vous avez fourni est écrit en PHP et effectue les actions suivantes : */
use Models\Detail;
/* L'instruction `use Models\Detail;` en PHP importe la classe `Detail` depuis l'espace de noms
`Models`. Cela vous permet de faire référence à la classe `Detail` directement par son nom dans
l'espace de noms actuel sans avoir à spécifier le chemin complet de l'espace de noms à chaque fois
que vous l'utilisez dans le code. */
use Models\Produit;

$rating = new Produit;
/*crée une nouvelle instance de la classe `Produit` et l'assigne à la
variable ``. Cela vous permet d'utiliser les méthodes et propriétés de la classe `Produit`
via l'objet `` dans le code suivant. */
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
                        <?php if (!empty($_SESSION['id'])) { ?>
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto text-white " href="/panier?id=<?= $detail['id'] ?>">Acheter</a>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>