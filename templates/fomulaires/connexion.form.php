<?php
require_once dirname(__DIR__, 2) . "/libraries/autoload.php";

use Models\Users;

$connexion = new Users();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $utilisateur = $connexion->connexion($email, $mot_de_passe);
    if ($utilisateur) {
        $_SESSION['id'] = $utilisateur['id'];
        $_SESSION['role'] = $utilisateur['role'];
        $_SESSION['nom'] = $utilisateur['nom'];

        if ($_SESSION['role'] === 'admin') {
            header('Location: admin/dashBord.php');
        } else {
            header('Location: index');
        }
        exit();
    } else {
        $erreur = "Email ou mot de passe incorrect.";
    }
}
if (isset($_SESSION['inscrit'])) {
    $message = $_SESSION['inscrit'];
    unset($_SESSION['inscrit']);
}
?>
<div class="mb-3">
    <h6 class="text-primary">Deja venu ici ?</h6>
    <h3 class="mb-5 mt-4">Connexion</h3>
    <?php if (!empty($message)) : ?>
        <div class="alert alert-success mt-3" role="alert">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="col-lg-7 mb-4">
            <div class="form-floating">
                <input type="text" class="form-control border border-black rounded-0 bg-lightgrey" id="email" placeholder="Votre email" name="email" required autofocus id="email">
                <label for="lname" class="p-start-5">email</label>
                <div class="invalid-feedback">
                    Veuillez saisir votre email.
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="col-lg-7 mb-4">
                <div class="form-floating">
                    <input type="password" class="form-control border border-black rounded-0 bg-lightgrey" id="mot_de_passe" placeholder="Votre mot de passe" name="mot_de_passe" required>
                    <label for="password" class="p-start-5">Mot de passe</label>
                    <div class="invalid-feedback">
                        Veuillez saisir votre mot de passe.
                    </div>
                </div>
            </div>
            <button class="btn btn-lg button-hover-gold border border-black rounded-0 text-uppercase fw-bolder my-3  px-5 text-white" type="submit">Connexion</button>
    </form>
    <?php if (isset($erreur)) : ?>
        <div class="alert alert-danger mt-3" role="alert">
            <?php echo $erreur; ?>
        </div>
    <?php endif; ?>
</div>