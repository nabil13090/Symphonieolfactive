<?php
require_once dirname(__DIR__, 1) . "/libraries/autoload.php";

use Models\Users;

$user = new Users();

$users = $user->findUserAll();




?>
<?php
require_once __DIR__ . "/layout/head.admin.php";
require_once __DIR__ . "/layout/header.admin.php";
?>
<div class="d-flex justify-content-center py-3 bg-black mb-3  ">
  <h2 class="text-white">Console Gestion Comptes</h2>
</div>
<section class="intro">
  <div>
    <div class="table-responsive">
      <table class="table table-borderless mb-0">
        <thead>
          <tr>
            <th scope="col">
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Rôle</th>
            <th scope="col" class="display-6">Update</th>
            <th scope="col" class="display-6">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $value) { ?>
            <tr>
              <th scope="row">
              </th>
              <td><?= $value['nom'] ?></td>
              <td><?= $value['email'] ?></td>
              <td class="text-center"><?= $value['role'] ?></td>
              <td>
                <a class="btn btn-outline-primary mt-auto pe-3  " href="modifierCompte.php?id=<?= $value['id'] ?>"><i class="bi bi-arrow-up-circle text-primary "></i> MODIFIER</a>
              </td>
              <td>
                <a class="btn btn-outline-danger mt-auto" href="supprimeCompte.php?id=<?= $value['id'] ?>"><i class="bi bi-x-circle text-danger "></i> SUPPRIMER</a>
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