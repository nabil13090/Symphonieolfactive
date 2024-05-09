<?php
require_once dirname(__DIR__, 2) . "/libraries/autoload.php";

use Models\Produit;

// Vérifie si l'utilisateur est connecté

if (!isset($_SESSION['id'])) {
    // Rediriger vers la page de connexion s'il n'est pas connecté
    header("Location: monespace");
    exit();
}

$client = new Produit();
$currentId = $_SESSION['id'];
$clients = $client->findCompte($currentId);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $rating = $_POST['rating'];
    $desciption = $_POST['desciption'];
    $image = "assets\images\avis\anonyme.jpg";
    
    // Insérer l'avis
    $result = $client->insertAvis([
        'nom' => $nom,
        'rating' => $rating,
        'desciption' => $desciption,
        'image' => $image
     
    ]);
    if ($result) {
        echo "L'avis a été inséré avec succès !";
    } else {
        echo "Une erreur est survenue lors de l'insertion de l'avis.";
    }
}

?>
    <div>
        <p> Votre commande a été validée, vous pouvez retrouver le détail de votre commande dans votre espace <strong>Mon Compte</strong>.</p>
    </div>
<h4>Symfony Olfactive vous remercie de votre achat</h4>
<div class=" d-flex justify-content-center mt-4 ">
    <div class=" border border-black rounded rounded " style="max-width: 400px; max-height:300px;">
        <div class="container">
            <h2>Laissez-nous un avis sur votre expérience</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="nom">Nom:</label>
                    <input type="text" class="form-control" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="rating">Note:</label>
                    <input type="text" class="form-control" name="rating" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control mb-3" name="desciption" required>
                </div>
                <button type="submit" class="btn btn-primary">Laisser Votre Avis</button>
            </form>
        </div>
    </div>
</div>