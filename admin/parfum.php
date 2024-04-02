<?php
require_once dirname(__DIR__, 1) . "/libraries/autoload.php";

use Models\Produit;

$parfums = new Produit();

$parfum = $parfums->findAll();

$genre = $parfums->findGenre();
var_dump($parfum);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styleAdmin.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Accueil</title>
</head>

<body>
  <div class="wrapper">
    <div class="sidebar">
      <h2>Menu</h2>
      <nav class="nav flex-column">
        <ul>
          <li><a class="nav-link active bi bi-house-gear-fill" href="/admin/dashBord.php"> DashBord</a></li>
          <li><a class="nav-link active bi bi-gear" href="/admin/parfum.php"> Parfums</a></li>
          <li><a class="nav-link active bi bi-person-fill-gear" href="/admin/comptes.php"> Compte Clients</a></li>
          <li><a class="nav-link active bi bi-sliders2-vertical" href="/admin/categories.php"> Categories</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- Page Content  -->
  <div class="d-flex justify-content-center py-3 bg-black mb-3  ">
    <h2 class="text-white">Dashbord Parfums</h2>
  </div>
  <section class="intro">
    <div class="card">
      <h1 class="d-flex justify-content-center py-1 display-3 ">Gestion des Parfums</h1>
    </div>
    <div class="bg-image h-100 py-3 rounded rounded " style="background-color: #6095F0;">
      <div class="mask d-flex align-items-center h-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
                <div class="card-body">
                  <div class="card d-flex justify-content-center mb-3 pt-3">
                    <h2 class=" d-flex justify-content-center px-5 py-1 display-4">Ajouter un Parfum</h2>
                    <div class="d-flex justify-content-center px-5 pb-3">
                      <a class="btn btn-outline-info mt-auto" href="creation.php"><i class="bi bi-plus-circle text-info "></i> AJOUTER</a>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-borderless mb-0">
                      <thead>
                        <tr>
                          <th scope="col">
                          <th scope="col">Nom</th>
                          <th scope="col">Images</th>
                          <th scope="col">Prix</th>
                          <th scope="col">Categorie</th>
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
                            <td><?= $value['prix'] ?><i class="bi bi-currency-euro"></i></td>
                            <?php foreach ($genre as $value) { ?>
                              <td><?= $value['id'] ?> <i class="bi bi-globe"></i></td>
                            <?php }  ?>
                            <td>
                              <a class="btn btn-outline-primary mt-auto " href="modifier.php?id=<?= $value['id'] ?>"><i class="bi bi-arrow-up-circle text-primary "></i> MODIFIER</a>
                            </td>
                            <td>
                              <a class="btn btn-outline-danger mt-auto" href="supprimé.php?id=<?= $value['id'] ?>"><i class="bi bi-x-circle text-danger "></i> SUPPRIMER</a>
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
</body>

</html>