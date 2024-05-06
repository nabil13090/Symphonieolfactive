<?php
require_once dirname(__DIR__, 2) . "/libraries/autoload.php";

use Models\Produit;

$commande = new Produit();
$currentId = $_SESSION['id'];
$commandes = $commande->findCompte($currentId);

if (!isset($_SESSION['id'])) {
    // Rediriger vers la page de connexion s'il n'est pas connecté
    header("Location: monespace");
    exit();
}

?>
<section class="intro">
    <div class="border border-black rounded rounded ">
        <h2 class=" text-lg-center mt-3  mb-5 ">Historique d'achat</h2>
        <div class="table-responsive">
            <table class="table table-borderless mb-5 text-lg-center ">
                <thead>
                    <tr>
                        <th scope="col">Numero de commande</th>
                        <th scope="col">Statut</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Parfums</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Date d'achat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($commandes as $value) { ?>
                        <tr>
                            <td><?= $value['commande_id'] ?></td>
                            <td><?= $value['statut'] ?></td>
                            <td><?= $value['prix'] ?></td>
                            <td><img class="rounded-circle" height="50px" src="<?= $value['url'] ?>" alt="<?= $value['nom'] ?>"></td>
                            <td><?= $value['quantite'] ?></td>
                            <td><?= $value['nom'] ?></td>
                            <td><?= $value['date_create'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
            <?php
            $sum = 0;
            if (count($commandes) > 0) {
                // Tableau associatif pour stocker les prix par commande_id
                $unique_prices = [];
    
                // Itération sur les données initiales
                foreach ($commandes as $item) {
                    $commande_id = $item['commande_id'];
                    $price = $item['price'];
    
                    // Si le prix pour cette commande_id n'existe pas encore dans le tableau, l'ajouter
                    if (!isset($unique_prices[$commande_id])) {
                        $unique_prices[$commande_id] = $price;
                    }
                }
                // Tableau final contenant uniquement les prix de chaque commande_id
                $final_prices = array_values($unique_prices);

                $sum = array_sum($final_prices);
            }?>
            <div class=" d-flex justify-content-end mb-5 me-5 ">
                <h3> Prix Total : <strong> <?= $sum ?> €</strong></h3>
            </div>
    </div>
</section>