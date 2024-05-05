<?php
require_once dirname(__DIR__, 2) . "/libraries/autoload.php";

use Models\Produit;

$client = new Produit();
$currentId = $_SESSION['id'];
$clients = $client->findCompte($currentId);

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
                    <?php foreach ($clients as $value) { ?>
                        <tr>
                            <td><?= $value['commande_id'] ?></td>
                            <td><?= $value['statut'] ?></td>
                            <td><?= $value['prix'] ?></td>
                            <td><img class="rounded-circle" height="50px" src="<?= $value['url'] ?>" alt="<?= $value['nom'] ?>"></td>
                            <td><?= $value['quantite'] ?></td>
                            <td><?= $value['nom'] ?></td>
                            <td><?= $value['date_create'] ?></td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
        <div class=" d-flex justify-content-end mb-5 me-5 ">
            <h3> Prix Total : <strong> <?= $value['price'] ?> €</strong></h3>
        </div>
    </div>
</section>