<?php ob_start(); ?>
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

<?php 
$img = "assets/background/contact.jpg";
$titre = "CONTACTEZ - NOUS";
$content = ob_get_clean(); 
?>

<?php require "template.php"; ?>