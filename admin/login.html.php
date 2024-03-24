<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleAdmin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Accueil</title>
</head>
    <body class="bg-secondary">
        <div class="wrapper">
        <div class="sidebar">
        <h2>Menu</h2>
        <nav class="nav flex-column">
        <ul>
            <li><a class="nav-link active bi bi-house-gear-fill" href="/admin/dashBord.php">  DashBord</a></li>
            <li><a class="nav-link active bi bi-gear" href="/admin/parfum.php">   Parfums</a></li>
            <li><a class="nav-link active bi bi-person-fill-gear" href="/admin/comptes.php">   Compte Clients</a></li>
            <li><a class="nav-link active bi bi-sliders2-vertical" href="/admin/categories.php">  Categories</a></li>
        </ul>
        </nav>
        </div>
        </div>
        <section class="vh-90 gradient-custom">
        <div class="container py-2 mt-5">
            <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <div class="mb-md-5 mt-md-4 pb-3">
                        <h2 class="fw-bold mb-2 text-uppercase">CONNEXION ADMIN</h2>
                    <p class="text-white-50 mb-2">Veuillez inséré votre Nom et votre Mot de Passe</p>

                    <div class="form-outline form-white mb-2">
                        <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                        <label class="form-label" for="typeEmailX">Nom</label>
                    </div>

                    <div class="form-outline form-white mb-2">
                        <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                        <label class="form-label" for="typePasswordX">Mot de Passe</label>
                    </div>
                            <p class="small mb-3 pb-lg-2 text-decoration-none"><a class="text-white-50" href="#!">Mot de passe oublié ?</a></p>
                        <button class="btn btn-outline-light btn-lg px-5" type="submit">CONNEXION</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </section>

</body>
</html>