<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Accueil</title>
</head>
<body>
    <div class="top">  
        <span class="txt me-4">Symphonie olfactive Aix en Provence</span>
    </div>
    <div class="d-flex justify-content-start pt-2">
    <img class="ms-3" height="100px" src="assets/logo/logo.png" alt="">  
        <a class="pi mx-5 text-decoration-none display-6" href="#">Symphonie Olfactive</a>   
        <div class="w-25">       
        <form class="d-flex py-3 justify-content-center" role="search">
            <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
                <button class="btn btn-outline-primary bi bi-search" type="submit">Chercher</button>
            </form>
            </div>
            </div>
            <nav class="navbar navbar-expand-lg d-flex justify-content-center">
            <div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-body-tertiary " id="navbarSupportedContent">
            <ul class="navbar-nav mx-5 mb-2 mb-lg-0 ">
                <li class="nav-item dropdown mx-3 ">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                FRAGRANCES
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/hommes.php">Hommes</a></li>
                    <li><a class="dropdown-item" href="/femmes.php">Femmes</a></li>
                    <li><a class="dropdown-item" href="/enfants.php">Enfants</a></li>
                </ul>
                <li class="nav-item mx-3 ">
                <a class="nav-link" href="/contact.php">CONTACT</a>
                </li>
                <li class="nav-item mx-3 ">
                <a class="nav-link" href="/monespace.php">BOUTIQUE</a>
                </li>
                <li class="nav-item mx-3 ">
                <a class="nav-link" href="/monespace.php">MON ESPACE</i></a>
                </li>
                <li class="nav-item mx-3 ">
                <a class="nav-link" href="#">PANIER</a>
                </li>
                </li>
            </ul>
            </div>
        </div>
        </nav>
        <header>
            <picture>
                <img class="w-100" height="450px" src="assets/background/contact.jpg" alt="">
            </picture>
            <div class="texttop">            
                <p class="display-2 text-black">Notre Boutique<strong></strong></p>
            </div>
        </header>
        <main>
        <section class="text-center pt-4 ">
            <h1>SYMPHONIE OLFACTIVE</h1>
        </section>
        <div class="container py-5 mb-5 ">
            <div class="row">
                <aside class="col-12 col-md-4">
                    <section>
                        <h2 class="mb-5 mt-sm-4">Nos coordonnées</h2>
                        <h3 class="mb-1">Symphonie Olfactive</h3>
                        <address>
                            7 cours Mirabeau<br>
                            13100 Aix en Provence
                        </address>

                        <h3 class="mt-4 mb-1">Téléphone</h3>
                        <address>
                            <a href="tel:+33559478418" class="text-black text-decoration-none">06 95 80 08 18</a>
                        </address>

                        <h3 class="mt-4 mb-1">Horaires</h3>
                        <p>
                            Du lundi au vendredi<br>
                            de 8h à 14h, de 16h à 21h<br>
                            Le samedi<br>
                            de 10h à 13h
                        </p>
                        <h3 class="mt-4 mb-1">Email</h3>
                        <address>
                            <a href="mailto:contact@studiobiarritz.com" class="text-black text-decoration-none">Symphonie@olfactive.com</a><br>
                            ou via ce formulaire
                        </address>
                    </section>
                </aside>

                <section class="contact col-12 col-sm-8">
                    <h2 class="mb-5 mt-4">Formulaire de contact</h2>
                    <div class="container g-0">
                        <form class="row text-uppercase">
                            <div class="col-lg-7 mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control border border-black rounded-0 bg-lightgrey" id="lname"
                                        placeholder="Votre nom" required>
                                    <label for="lname" class="p-start-5">Votre nom</label>
                                    <div class="invalid-feedback">
                                        Veuillez saisir votre nom.
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control border border-black rounded-0 bg-lightgrey" id="fname"
                                        placeholder="Votre prénom" required>
                                    <label for="fname">Votre prénom</label>
                                    <div class="invalid-feedback">
                                        Veuillez saisir votre prénom.
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 mb-4">
                                <div class="form-floating">
                                    <input type="tel" class="form-control border border-black rounded-0 bg-lightgrey" id="tel"
                                        placeholder="Votre téléphone" required>
                                    <label for="tel">Votre téléphone</label>
                                    <div class="invalid-feedback">
                                        Veuillez saisir un numéro de téléphone valide.
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 mb-4">
                                <div class="form-floating">
                                    <input type="email" class="form-control border border-black rounded-0 bg-lightgrey" id="emailInput"
                                        placeholder="Votre email" required>
                                    <label for="emailInput">Votre email</label>
                                    <div class="invalid-feedback">
                                        Veuillez saisir un email valide.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control border border-black  rounded-0 bg-lightgrey" id="subject"
                                        placeholder="Sujet" required>
                                    <label for="subject">Sujet</label>
                                    <div class="invalid-feedback">
                                        Veuillez saisir un sujet dans le champ de texte
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-4-custom">
                                <div class="form-floating">
                                    <textarea class="form-control border border-black rounded-0 bg-lightgrey"
                                        placeholder="Votre message" id="message" required></textarea>
                                    <label for="message">Votre message</label>
                                    <div class="invalid-feedback">
                                        Veuillez saisir un message dans la zone de texte.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 bg">
                                <button
                                    class="btn btn-lg button-hover-gold border border-black rounded-0 text-uppercase fw-bolder my-3  px-5 text-white "
                                    type="submit">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>

    <div class="w-100">
    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.8307187275473!2d5.446026211920922!3d43.52672266048106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c98d97d11a67cb%3A0x39efbc9209cf7a83!2sCr%20Mirabeau%2C%2013100%20Aix-en-Provence!5e0!3m2!1sfr!2sfr!4v1710842056484!5m2!1sfr!2sfr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

        </main>
        <footer class="pt-3">
  <!-- Section: Links  -->
  <section class="text-center text-lg-start text-muted mt-3 ">
    <div class="container text-center text-white  text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            Symphony Olfactive
          </h6>
          <p>
            Site de vente de parfum de luxe et variée pour toute la famille.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            FRAGRANCES
          </h6>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Hommes</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Femmes</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Enfants</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Categories</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
           EXPLORER SYMPHONIE
          </h6>
          <p>
            <a href="#!" class="text-reset text-decoration-none ">Paiment sécurisé</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Contact</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Rendez-nous visite aussi en boutique !</h6>
          <p>7 cours Mirabeau Aix en Provence</p>
          <p> Symphonie@olfactive.com</p>
          <p>06 95 80 08 18</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4">
    © 2024 Copyright: Symphonie Olfactive
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>
