<?php
require_once dirname(__DIR__, 2) . "/libraries/autoload.php";

use Models\Produit;

$type = new Produit();
$genre = $type->findGenre();
?>

<body>
    <div id="orijime"></div>
    <div class="top">
        <span class="txt me-4">Symphonie olfactive Aix en Provence</span>
    </div>
    <div class="d-flex justify-content-end gap-5">
        <?php if (!empty($_SESSION["id"])) : ?>
            <h4 class="mt-2">Bienvenue <strong><?php echo ucfirst($_SESSION["nom"]) ?>
                </strong></h4><?php endif; ?>
        <div><a href="plustard.php" class=" nav-link me-3 align-items-center mt-2 bi bi-box-arrow-left"></a>
        </div>
    </div>
    <div class="d-flex justify-content-center pt-2">
        <img class="ms-3" height="100px" src="assets/logo/logo.png" alt="">
        <a class="pi mx-5 text-decoration-none display-6" href="/index">Symphonie Olfactive</a>
    </div>
    <nav class="navbar navbar-expand-lg d-flex justify-content-center">
        <div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-body-tertiary " id="navbarSupportedContent">
                <ul class="navbar-nav mx-5 mb-2 mb-lg-0 d-flex justify-content-end ">
                    <li class="nav-item dropdown mx-3 ">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            FRAGRANCES
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach ($genre as $value) { ?>
                                <li><a class="dropdown-item text-uppercase" href="/<?= $value['nom'] ?>?id=<?= $value['id'] ?>"><?= $value['nom'] ?></a></li>
                            <?php } ?>
                        </ul>
                    <li class="nav-item mx-3 ">
                        <a class="nav-link bi bi-telephone-fill" href="/contact"> CONTACT</a>
                    </li>
                    <?php if (empty($_SESSION['id'])) { ?>
                        <li class="nav-item mx-3">
                            <a class="nav-link bi bi-person-circle" href="/monespace"> MON ESPACE</a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($_SESSION['id'])) { ?>
                        <li class="nav-item mx-3">
                            <a class="nav-link bi bi-basket-fill" href="panier"> PANIER</a>
                        </li>
                    <?php } ?>
                    <?php if (!empty($_SESSION['id'])) { ?>
                        <?php if ($_SESSION['role'] !== 'admin') { ?>
                            <li class="nav-item mx-3">
                                <a class="nav-link bi bi-person" href="historiqueCompte"> MON COMPTE</a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        <picture>
            <img class="w-100" height="600px" src="<?= $img ?>" alt="">
        </picture>
        <div class="texttop">
            <p class="display-2 "><strong><?= $titre ?></strong></p>
        </div>
    </header>