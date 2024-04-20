<?php
require_once dirname(__DIR__, 1) . "/libraries/autoload.php";

use Models\Users;

$produit = new Users();
$produit_id = $_GET['id'];
$donneesActuelles = $produit->findUser($produit_id);

$roles = $produit->roleUser();
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    
    // Récupérer les données soumises du formulaire
    $donneesSoumises = [
        'nom' => $_POST["nom"],
        'email' => $_POST["email"],

    ];
    $differences = array_diff_assoc($donneesSoumises,
        $donneesActuelles
    );


    if (!empty($differences)) {
        $update = $produit->updateUser($_GET['id'], $donneesSoumises);
        if ($update) {
            header("Location: comptes.php");
        }
    }
}
if (!empty($_GET['id'])) {
    $currentid = $_GET['id'];

    $user_info = $produit->findUser($currentid);
}
require_once __DIR__ . "/layout/head.admin.php";
require_once __DIR__ . "/layout/header.admin.php";
?>
<div class="container mt-5" style="max-width: 800px; max-height:600px;">
    <h2>Modifier le Compte Client</h2>
    <form method="post">
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" name="nom" value="<?php echo $user_info['nom']; ?>">
        </div>
        <div class="form-group">
            <label for="nom">Email:</label>
            <input type="text" class="form-control" name="email" value="<?php echo $user_info['email']; ?>">
        </div>
        <button type="submit" class="btn btn-primary mt-5 ">Modifier</button>
    </form>
</div>
</form>
</div>
</div>
</div>
</section>