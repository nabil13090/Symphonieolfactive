<?php
require_once dirname(__DIR__, 1) . "/libraries/autoload.php";

use Models\Users;

$produit = new Users();
$roles = $produit->roleUser();
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // Récupérer les données soumises du formulaire
    $donneesSoumises = [
        'id' => $_POST["id"],
        'nom' => $_POST["nom"],
        'email' => $_POST["email"],
        'role' => $_POST["role"],
        'mot_de_passe' => $_POST["mot_de_passe"],

    ];
    $update = $produit->updateUser($id_utilisateur, $nouveau_nom, $nouvel_email, $nouveau_mot_de_passe);
    if ($update) {
        // Rediriger l'utilisateur vers une page de succès
        header("Location: edit.php?message=1");
        exit;
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
        <div class="form-group">
            <label for="nom">Mot de passe:</label>
            <input type="text" class="form-control" name="mot_de_passe" value="<?php echo $user_info['mot_de_passe']; ?>">
        </div>
        <div class="form-group mb-5 ">
            <label for="genreId">Rôle:</label>
            <select class="form-control" name="role">
                <?php foreach ($roles as $item) { ?>
                    <option value="<?= $item["id"] . '-' . $item["role"] ?>"><?= $item["role"] ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
</form>
</div>
</div>
</div>
</section>