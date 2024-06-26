<?php
require_once dirname(__DIR__, 2) . "/libraries/autoload.php";

use Models\Detail;
// use Controllers\PanierController;

$parfumDetail = new Detail();
// Initialise le panier s'il n'existe pas déjà
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

if (isset($_GET['id'])) { // 1
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


/* Ce bloc de code gère le processus lorsque l'utilisateur soumet le formulaire portant le nom
"valide_panier". Voici un aperçu de ce qu'il fait : */
if (isset($_POST['valide_panier'])) {

    $date_create = date('y-m-d');

    try {
        $parfumDetail->getBeginTransaction();
        $parfumDetail->insertCommande($_SESSION['id'], $date_create, $_SESSION['total'],);
        $commande_id = $parfumDetail->getLastinsert();
        foreach ($_SESSION['panier'] as $produit) {
            $parfumDetail->getCommande($commande_id, $produit['id'], $produit['quantite']);
        }
        $parfumDetail->getCommit();
        $_SESSION['panier'] = [];
        header("Location: validationPaiment");
    } catch (PDOException $e) {
        $parfumDetail->getRoll();
        echo "erreur : " . $e->getMessage();
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
                            <input id="form1" min="0" name="quantity" value="<?= $item['quantite'] ?>" type="number" class="form-control form-control-sm" style="width: 50px;" />
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
                <form action="panier" method="post">
                    <button type="submit" class="btn btn-primary btn-block btn-lg" name="valide_panier">
                        <div class="d-flex justify-content-between">
                            <a class=" text-decoration-none text-white " href="validationPaiment" onclick="return confirm('Voulez vous valider votre panier ?');"><span>Payer</span></a>
                            <span><?php $_SESSION['total'] = $total;
                                    echo $total ?> €</span>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>