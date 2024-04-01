        <?php
        session_start();
        require_once dirname(__DIR__, 2) . "/libraries/autoload.php";

        use Models\Users;

        $get = new Users();




        $result  = '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $mot_de_passe = $_POST['mot_de_passe'];

            $result = $get->inscription($nom, $email, $mot_de_passe);


            if ($result['success']) {
                $_SESSION["inscrit"] = $result['message'];
                header('Location: monespace.php');
                exit();
            } else {
                $message = $result['message'];
            }
        }




        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="row text-uppercase" method="post">
            <?php if (!empty($message)) : ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>
            <div class="col-lg-7 mb-4">
                <div class="form-floating">
                    <input type="text" class="form-control border border-black rounded-0 bg-lightgrey" id="lname" placeholder="Votre nom" name="nom" required>
                    <label for="lname" class="p-start-5">Votre nom</label>
                    <div class="invalid-feedback">
                        Veuillez saisir votre nom.
                    </div>
                </div>
            </div>

            <div class="col-lg-7 mb-4">
                <div class="form-floating">
                    <input type="email" class="form-control border border-black rounded-0 bg-lightgrey" id="emailInput" placeholder="Votre email" name="email" required>
                    <label for="emailInput">Votre email</label>
                    <div class="invalid-feedback">
                        Veuillez saisir un email valide.
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4">
                <div class="form-floating">
                    <input type="text" class="form-control border border-black  rounded-0 bg-lightgrey" id="subject" placeholder="Sujet" name="mot_de_passe" required>
                    <label for="subject">Mot de passe</label>
                    <div class="invalid-feedback">
                        Veuillez saisir un mot de passe dans le champ de texte
                    </div>
                </div>
            </div>


            </div>
            <div class="col-12 bg">
                <button class="btn btn-lg button-hover-gold border border-black rounded-0 text-uppercase fw-bolder my-3 text-white  px-5 " type="submit">M'inscrire</button>
            </div>
        </form>