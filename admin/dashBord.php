<?php
session_start();
// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['id'])) {
  // Rediriger vers la page de connexion s'il n'est pas connecté
  header("Location: ../monespace");
  exit();
}
// Vérifier si l'utilisateur a le rôle d'admin
if ($_SESSION['role'] !== 'admin') {
  // Rediriger vers une page d'erreur ou une autre page appropriée
  header("Location: ../index");
  exit();
}
require_once __DIR__ . "/layout/head.admin.php";
require_once __DIR__ . "/layout/header.admin.php"; ?>
<section>
  <h2 class=" text-center mx-sm-auto ms-5">Modification du site Symphonie OLFACTIVE</h2>
</section>
<?php require_once __DIR__ . "/layout/footer.admin.php"; ?>