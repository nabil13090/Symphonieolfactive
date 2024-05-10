<?php

require_once dirname(__DIR__, 1) . "/libraries/autoload.php";

use Models\Produit;

$commande = new Produit();

$currentId = $_GET["id"];

$orderProducts = $commande->findCommande($currentId);
// Supposons que le résultat de la requête ne contienne qu'une seule commande


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $statutSoumis = $_POST["statut"];

    // Vérifiez si le statut soumis est différent du statut actuel
    if ($donneesActuelles['statut'] !== $statutSoumis) {
        // Mettez à jour le statut de la commande
        $update = $commande->updateCommandeStatut($currentId, ['statut' => $statutSoumis]);
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
            <form method="post">
                <table class="table table-borderless mb-5 text-lg-center">
                    <thead>
                        <tr>
                            <th scope="col">Statut</th>
                            <th scope="col">Prix</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <select name="statut" class=" form-select">
                                    <option <?php if ($orderProducts['statut'] == "preparation") echo "selected"; ?> value="preparation">Preparation</option>
                                    <option <?php if ($orderProducts['statut'] == "prete") echo "selected"; ?> value="prete">Prete</option>
                                    <option <?php if ($orderProducts['statut'] == "recupere") echo "selected"; ?> value="recupere">Recupere</option>
                                </select>
                            </td>
                            <td><?= $orderProducts['price'] ?></td>
                            <td><button type="submit" class="btn btn-primary">Mettre à jour</button></td>
                        </tr>

                    </tbody>
                </table>
            </form>
        </div>
    </div>
</section>