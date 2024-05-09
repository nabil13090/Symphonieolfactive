<?php
require_once dirname(__DIR__, 2) . "/libraries/autoload.php";

use Models\Produit;

$type = new Produit();
$genre = $type->findGenre();
?>
<footer class="pt-3">
  <section class="text-center text-lg-start text-muted mt-3 ">
    <div class="container text-center text-white  text-md-start mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Symphonie Olfactive
          </h6>
          <p>
            Site de vente de parfum de luxe et variée pour toute la famille.
          </p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            FRAGRANCES
          </h6>
          <?php foreach ($genre as $value) { ?>
            <p>
              <a class="dropdown-item" href="/<?= $value['nom'] ?>?id=<?= $value['id'] ?>"><?= $value['nom'] ?></a>
            </p>
          <?php } ?>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            EXPLORER SYMPHONIE
          </h6>
          <p>
            <a href="/panier" class="text-reset text-decoration-none ">Paiment sécurisé</a>
          </p>
          <p>
            <a href="/contact" class="text-reset text-decoration-none">Contact</a>
          </p>
          <p>
            <a href="/politiquedonnées" class="text-reset text-decoration-none">Politique des données</a>
          </p>
          <div class="d-flex">
            <i class="bi bi-instagram mx-1 "></i>
            <i class="bi bi-facebook mx-1 "></i>
            <i class="bi bi-snapchat mx-1"></i>
            <i class="bi bi-twitter-x mx-1"></i>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Rendez-nous visite aussi en boutique !</h6>
          <p>7 cours Mirabeau Aix en Provence</p>
          <p> Symphonie@olfactive.com</p>
          <p>06 95 80 08 18</p>
        </div>
      </div>
    </div>
  </section>
  <div class="text-center p-4">
    <?= date('Y'); ?> © Copyright : Symphonie Olfactive
  </div>
</footer>
</body>

</html>