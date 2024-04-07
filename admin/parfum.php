<?php
require_once dirname(__DIR__, 1) . "/libraries/autoload.php";

use Models\Produit;

$parfums = new Produit();

$parfum = $parfums->findAdminProduits();




// var_dump($parfum);
?>
<?php
require_once __DIR__ . "/layout/head.admin.php";
require_once __DIR__ . "/layout/header.admin.php";
?>
<div class="d-flex justify-content-center py-3 bg-black mb-3  ">
  <h2 class="text-white">Console Gestion Parfums</h2>
</div>
<section class="intro">
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
            <th scope="col" class="display-6">Update</th>
            <th scope="col" class="display-6">Delete</th>
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
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</section>