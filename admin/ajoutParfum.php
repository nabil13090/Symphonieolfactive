<?php

require_once dirname(__DIR__, 1) . "/libraries/autoload.php";

use Models\Produit;

$parfums = new Produit();





$target_dir = "../assets/images/parfum/"; // Dossier où vous souhaitez stocker les images
$image_path = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $image_path = uploadImageFile('image', $target_dir);
}

// Si l'image est téléchargée avec succès, insérer le produit dans la base de données
if ($image_path !== null) {
    // Données du produit à insérer
    $data = array(
        'nom' => htmlspecialchars($_POST['nom']),
        'description' => htmlspecialchars($_POST['description']),
        'prix' => floatval($_POST['prix']),
        'stock' => intval($_POST['stock']),
        'contenances' => intval($_POST['contenances']),
        'rating' => floatval($_POST['rating']),
        'imageId' => null // Cette valeur sera remplie après l'insertion de l'image
    );

    // Étape 1 : Insérer l'image et récupérer son ID
    $imageId = $parfums->insertImage($image_path);

    if ($imageId !== false) {
        // Étape 2 : Insérer le produit en faisant référence à l'ID de l'image
        $data['imageId'] = $imageId;
        $inserted = $parfums->insert($data);

        if ($inserted) {
            echo "Le produit a été inséré avec succès !";
        } else {
            echo "Une erreur est survenue lors de l'insertion du produit.";
        }
    } else {
        echo "Une erreur est survenue lors de l'insertion de l'image.";
    }
}

// Fonction pour gérer le téléchargement de l'image
function uploadImageFile($inputName, $destinationPath)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES[$inputName]) && $_FILES[$inputName]['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES[$inputName]['tmp_name'];
        $fileName = $_FILES[$inputName]['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $newFileName = uniqid() . '.' . $fileExtension; // Utilisez un nom de fichier unique
        $destPath = $destinationPath . $newFileName;

        if (move_uploaded_file($fileTmpPath, $destPath)) {
            return  $destPath;
        } else {
            return null;
        }
    } else {
        return null;
    }
}

?>
<?php
require_once __DIR__ . "/layout/head.admin.php";
require_once __DIR__ . "/layout/header.admin.php";
?>
<div class="container mt-1" style="max-width: 800px; max-height:600px;">
    <div>
        <h2 class="text-center">AJOUT DE PARFUM</h2>
        <div class="card-body d-flex  justify-content-center ">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nom du produit:</label><br>
                    <input type="text" id="nom" class="form-control" name="nom"><br>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label><br>
                    <textarea id="description" class="form-control" name="description"></textarea><br>
                </div>
                <div class="form-group">
                    <label for="prix">Prix:</label><br>
                    <input type="text" id="prix" class="form-control" name="prix"><br>
                </div>
                <div class="form-group">
                    <label for="contenances">Contenances:</label><br>
                    <input type="text" id="contenances" class="form-control" name="contenances"><br>
                </div>
                <div class="form-group">
                    <label for="rating">Rating:</label><br>
                    <input type="text" id="rating" class="form-control" name="rating"><br>
                </div>
                <div class="form-group">
                    <label for="stock">Stock:</label><br>
                    <input type="text" id="stock" class="form-control" name="stock"><br>
                </div>
                <div class="form-group mb-1">
                    <label for="image">Image:</label><br>
                    <input type="file" class="btn btn-primary form-control " id="image" name="image"><br>
                </div>
                <input type="submit" class="btn btn-primary mt-1" name="submit" value="Ajouter">
            </form>
        </div>

    </div>

</div>