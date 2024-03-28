<?php ob_start(); ?>

        <section class="text-center pt-4">
            <h1>SYMPHONIE OLFACTIVE</h1>
        </section>
        <div class="container py-5 mb-5 ">
            <div class="row">
                <aside class="col-12 col-md-4">
                <!-- <img src="https://api.dicebear.com/8.x/lorelei-neutral/svg?seed=jhfjhfj" alt="avatar"/> -->
                    <section>
                        <form>
                            <div class="mb-3">
                            <h6 class="text-primary">Deja venu ici ?</h6>
                            <h3 class="mb-5 mt-4">Connexion</h3>
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
                            <div class="mb-3">
                            <div class="col-lg-7 mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control border border-black rounded-0 bg-lightgrey" id="lname"
                                        placeholder="Votre nom" required>
                                    <label for="lname" class="p-start-5">Mot de passe</label>
                                    <div class="invalid-feedback">
                                        Veuillez saisir votre nom.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-lg button-hover-gold border border-black rounded-0 text-uppercase fw-bolder my-3  px-5 text-white" type="submit">Connexion</button>
                        </form>
                    </section>
                </aside>

                <section class="contact col-12 col-sm-8">
                <h6 class="text-primary">Première fois chez Symphonie olfactive ?</h6>
                    <h2 class="mb-5 mt-4">Formulaire d'inscription</h2>
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
                                    <label for="subject">Mot de passe</label>
                                    <div class="invalid-feedback">
                                        Veuillez saisir un mot de passe dans le champ de texte
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control border border-black  rounded-0 bg-lightgrey" id="subject"
                                        placeholder="Sujet" required>
                                    <label for="subject">Confirmer votre Mot de passe</label>
                                    <div class="invalid-feedback">
                                        Veuillez resaisir un mot de passe dans le champ de texte
                                    </div>
                                </div>
                            </div>
                          
                            </div>

                            <div class="col-12 bg">
                                <button
                                    class="btn btn-lg button-hover-gold border border-black rounded-0 text-uppercase fw-bolder my-3 text-white  px-5 "
                                    type="submit">M'inscrire</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <?php require_once __DIR__ . "/templates/produits/cardsAvis.php"; ?>

    <?php 
$img = "assets/background/monespace.jpg";
$titre = "MON ESPACE";
$content = ob_get_clean(); 
?>

<?php require "template.php"; ?>