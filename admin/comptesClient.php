<?php

require_once dirname(__DIR__, 1) . "/libraries/autoload.php";


use Models\Produit;

$commande = new Produit();

if (isset($_GET["id"])) {
    $currentId = $_GET["id"];
} else {
    // header("Location: comptes.php");
    exit; // Redirection et arrêt de l'exécution du script 
}

$orderProducts = $commande->findCompte($currentId);

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
                            <th scope="col">Prix</th>
                            <th scope="col">Date d'achat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orderProducts as $value) { ?>
                            <tr>
                                <td><?= $value['commande_id'] ?></td>
                                <td><?= $value['price'] ?></td>
                                <td><?= $value['date_create'] ?></td>
                                <td> <a class="btn btn-outline-primary mt-auto pe-3  " href="modificationCommande.php?id=<?= $value['commande_id'] ?>"><i class="bi bi-arrow-up-circle text-primary "></i>Mettre a jour la commande</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</section>