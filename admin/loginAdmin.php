<?php
require_once __DIR__ . "/layout/head.admin.php";
require_once __DIR__ . "/layout/header.admin.php"; ?>
<div class="d-flex justify-content-center py-3 bg-black mb-3  ">
    <h2 class="text-white">Dashbord Administrateur</h2>
</div>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Connexion</h2>
                                <p class="text-white-50 mb-5">Merci de vous connecter en Administrateur</p>

                                <div class="form-outline form-white mb-4">
                                    <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                                    <label class="form-label" for="typeEmailX">Email</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                                    <label class="form-label" for="typePasswordX">Password</label>
                                </div>


                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php require_once __DIR__ . "/layout/footer.admin.php"; ?>