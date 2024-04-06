<?php
require_once dirname(__DIR__, 1) . "/libraries/autoload.php";


use Models\Detail;

// Créer une nouvelle instance de la classe Produit
$produit = new Detail();


// Afficher tous

if (!empty($_GET['id'])) {
    $produit_id = $_GET['id'];

    $produit_info = $produit->find($produit_id);


    if ($produit_info) {

        $genreId = $produit_info['genreId'];
        $categorieId = $produit_info['categorieId'];


        $genre_details = $produit->findGenre($produit_id);
        $categorie_details = $produit->findCategorie($produit_id);
    }
}
$donneesActuelles = $produit_info;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // Récupérer les données soumises du formulaire
    
    $donneesSoumises = [
        'nom' => $_POST["nom"],
        'description' => $_POST["description"],
        'prix' => $_POST["prix"],
        'contenances' => $_POST["contenances"],
        'rating' => $_POST["rating"],
        'stock' => $_POST["stock"],
    ];
    $differences = array_diff_assoc($donneesSoumises, $donneesActuelles);

    // Effectuer la mise à jour du produit
    if (!empty($differences)) {
        $update = $produit->updateProduits($_GET['id'], $donneesSoumises);
        if ($update) {
            header("Location: edit.php?message=1");
        }
    }
}






?>

        <?php
        require_once __DIR__ . "/layout/head.admin.php";
        require_once __DIR__ . "/layout/header.admin.php";
        ?>
        <div class="container mt-5" style="max-width: 800px; max-height:600px;">
            <h2>Modifier un Parfum</h2>
            <form method="post">
                <div class="form-group">
                    <label for="nom">Nom:</label>
                    <input type="text" class="form-control" name="nom" value="<?php echo $produit_info['nom']; ?>">
                </div>
                <div class="form-group">
                    <label for="nom">prix:</label>
                    <input type="text" class="form-control" name="prix" value="<?php echo $produit_info['prix']; ?>">
                </div>
                <div class="form-group">
                    <label for="nom">Description:</label>
                    <input type="text" class="form-control" name="description" value="<?php echo $produit_info['description']; ?>">
                </div>
                <div class="form-group">
                    <label for="nom">stock:</label>
                    <input type="text" class="form-control" name="stock" value="<?php echo $produit_info['stock']; ?>">
                </div>
                <div class="form-group">
                    <label for="nom">Contenances:</label>
                    <input type="text" class="form-control" name="contenances" value="<?php echo $produit_info['contenances']; ?>">
                </div>
                <div class="form-group">
                    <label for="nom">Note:</label>
                    <input type="text" class="form-control" name="rating" value="<?php echo $produit_info['rating']; ?>">
                </div>
                <div class="form-group">
                    <label for="genreId">Genre:</label>
                    <select class="form-control" name="genreId">
                        <?php foreach ($genre_details as $item) { ?>
                            <option value="<?= $item["id"] . '-' . $item["nom"] ?>"><?= $item["nom"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group mb-5 ">
                    <label for="genreId">Categorie:</label>
                    <select class="form-control" name="categorieId">
                        <?php foreach ($categorie_details as $item) { ?>
                            <option value="<?= $item["id"] . '-' . $item["name"] ?>"><?= $item["name"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <!-- Répéter le processus pour les autres clés étrangères -->
                <button type="submit" class="btn btn-primary">Modifier</button>
                <!-- Ajouter un champ caché pour l'ID du produit -->
            </form>
        </div>
</form>
</div>
</div>
</div>
</section>