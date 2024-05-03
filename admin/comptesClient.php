<?php

require_once dirname(__DIR__, 1) . "/libraries/autoload.php";


use Models\Produit;

$commande = new Produit();

if (isset($_GET["id"])) {
    $currentId = $_GET["id"];
} else {
    header("Location: comptes.php");
    exit; // Redirection et arrêt de l'exécution du script 
}

$orderProducts = $commande->findCompte($currentId);
$donneesActuelles = $orderProducts[0]; // Supposons que le résultat de la requête ne contienne qu'une seule commande

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $statutSoumis = $_POST["statut"];

    // Vérifiez si le statut soumis est différent du statut actuel
    if ($donneesActuelles['statut'] !== $statutSoumis) {
        // Mettez à jour le statut de la commande
        $update = $commande->updateCommandeStatut($currentId, ['statut' => $statutSoumis]);
        var_dump($statutSoumis);
        if ($update) {
        } else {
            echo "Échec de la mise à jour du statut de la commande.";
        }
    } else {
        echo "Le statut de la commande est inchangé.";
    }
}
?>

<?php
require_once __DIR__ . "/layout/head.admin.php";
require_once __DIR__ . "/layout/header.admin.php";
?>
<section class="intro">
    <div>
        <h2 class=" text-lg-center mt-3  mb-5 ">Historique d'achat</h2>
        <div class="table-responsive">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $currentId; ?>">
                <table class="table table-borderless mb-5 text-lg-center">
                    <thead>
                        <tr>
                            <th scope="col">Numero de commande</th>
                            <th scope="col">Statut</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Parfums</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Date d'achat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orderProducts as $value) { ?>
                            <tr>
                                <td><?= $value['commande_id'] ?></td>
                                <td><input type="text" class="form-control" name="statut" value="<?= $value['statut'] ?>"></td>
                                <td><?= $value['price'] ?></td>
                                <td><?= $value['nom'] ?></td>
                                <td><?= $value['quantite'] ?></td>
                                <td><?= $value['nom'] ?></td>
                                <td><?= $value['date_create'] ?></td>
                                <td><button type="submit" class="btn btn-primary">Mettre à jour</button></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</section>