<?php
require_once dirname(__DIR__, 2) . "/libraries/autoload.php";

use Models\Detail;
// use Controllers\PanierController;
$parfumDetail = new Detail();
// Initialise le panier s'il n'existe pas déjà
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}
// Vérifie si un produit est ajouté au panier
if (isset($_GET['id'])) {
    $parfumDetail->addProductPanier(intval($_GET["id"]));
} else {
    // Si l'identifiant n'est pas fourni, définir un identifiant par défaut
    $defaultId = 1; // ID de votre produit par défaut
    // Rechercher le produit par défaut dans la base de données
    $cart = $parfumDetail->find($defaultId);
    if (empty($cart)) {
        die("Le produit par défaut n'existe pas");
    }
}
?>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="h5">Panier</th>
                <th scope="col">Contenances</th>
                <th scope="col">Quantité</th>
                <th scope="col">Prix</th>
            </tr>
        </thead>
        <tbody class=" container ">
            <?php
            $total = 0;
            foreach ($_SESSION['panier'] as $id => $item) {
                $prix_total_produit = $item['quantite'] * $item['prix'];
                $total += $prix_total_produit;
            ?>
                <tr>
                    <th scope="row">
                        <div class="d-flex align-items-center">
                            <img src="../../<?= $item['image'] ?>" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                            <div class="flex-column md-4">
                                <p class="mb-2"><?= $item['nom'] ?></p>
                                <p class="mb-0">Symphonie Olfactive</p>
                            </div>
                        </div>
                    </th>
                    <td class="align-middle px-3 ">
                        <p class="mb-0"><?= $item['contenances'] ?> ML</p>
                    </td>
                    <td class="align-middle">
                        <div class="d-flex flex-row">
                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="fas fa-minus"></i>
                            </button>

                            <input id="form1" min="0" name="quantity" value="<?= $item['quantite'] ?>" type="number" class="form-control form-control-sm" style="width: 50px;" />

                            <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </td>
                    <td class="align-middle">
                        <p class="mb-0" style="font-weight: 500;"><?= $prix_total_produit ?> €</p>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
    <div class="card-body p-4 ">
        <div class="row d-flex justify-content-end ">
            <div class="col-lg-4 col-xl-3">
                <div class="d-flex justify-content-between">
                    <p class="mb-2">Total HT</p>
                    <p class="mb-2"><?= ($total - ($total * 0.18)) ?> €</p>
                </div>

                <div class="d-flex justify-content-between">
                    <p class="mb-0">T.V.A</p>
                    <p class="mb-0"><?= ($total * 0.18) ?> €</p>
                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-between mb-4">
                    <p class="mb-2">Total TTC</p>
                    <p class="mb-2"><?= $total ?> €</p>
                </div>

                <button type="button" class="btn btn-primary btn-block btn-lg">
                    <div class="d-flex justify-content-between">
                        <a class=" text-decoration-none text-white " href="/validationPaiment"><span>Payer</span></a>
                        <span><?= $total ?> €</span>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>