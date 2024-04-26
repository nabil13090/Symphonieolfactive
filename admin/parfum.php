<?php
require_once dirname(__DIR__, 1) . "/libraries/autoload.php";

use Models\Produit;

$parfums = new Produit();
$parfum = $parfums->findAdminProduits();
?>
<?php
require_once __DIR__ . "/layout/head.admin.php";
require_once __DIR__ . "/layout/header.admin.php";
?>
<section class="intro">
  <h2 class=" text-lg-center ">Modification des produits</h2>
  <div>
    <div class="table-responsive">
      <table class="table table-borderless mb-0">
        <thead>
          <tr>
            <th scope="col">
            <th scope="col">Nom</th>
            <th scope="col">Prix</th>
            <th scope="col">contenances</th>
            <th scope="col">stock</th>
            <th scope="col">genre</th>
            <th scope="col">note</th>
            <th class="text-center" scope="col">Update</th>
            <th class="text-center" scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($parfum as $value) { ?>
            <tr>
              <th scope="row">
              </th>
              <td><?= $value['nom'] ?></td>
              <td><?= $value['prix'] ?></td>
              <td class="text-center"><?= $value['contenances'] ?></td>
              <td><?= $value['stock'] ?></td>
              <td><?= $value['name'] ?></td>
              <td class="text-center"><?= $value['rating'] ?></td>
              <td>
                <a class="btn btn-outline-primary mt-auto pe-3  " href="modifierParfum.php?id=<?= $value['id'] ?>"><i class="bi bi-arrow-up-circle text-primary "></i> MODIFIER</a>
              </td>
              <td>
                <a class="btn btn-outline-danger mt-auto" href="suppriméParfum.php?id=<?= $value['id'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produits ?');"><i class="bi bi-x-circle text-danger "></i> SUPPRIMER</a>
              </td>
            </tr>
          <?php }  ?>
        </tbody>
      </table>
    </div>
  </div>
</section>