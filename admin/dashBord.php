<?php


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Vérifier les identifiants de connexion et démarrer la session si l'utilisateur est authentifié
// }

// if (!isset($_SESSION['id']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
//     // Si l'utilisateur n'est pas connecté ou n'a pas le rôle d'administrateur, le rediriger vers la page d'accueil
//     header('Location: index.php');
//     exit();
// }

require_once __DIR__ . "/layout/head.admin.php";
require_once __DIR__ . "/layout/header.admin.php"; ?>
<div class="d-flex justify-content-center py-3 bg-black mb-3  ">
  <h2 class="text-white">Dashbord Administrateur</h2>
</div>

  <?php require_once __DIR__ . "/layout/footer.admin.php"; ?>