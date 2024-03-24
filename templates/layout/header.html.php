<body>
    <div class="top">  
        <span class="txt me-4">Symphonie olfactive Aix en Provence</span>
    </div>
    <div class="d-flex justify-content-start pt-2">
    <img class="ms-3" height="100px" src="assets/logo/logo.png" alt="">  
        <a class="pi mx-5 text-decoration-none display-6" href="/index.php">Symphonie Olfactive</a>   
        <div class="w-25">       
        <form class="d-flex py-3 justify-content-center" role="search">
            <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
                <button class="btn btn-outline-primary bi bi-search" type="submit"></button>
            </form>
            </div>
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
                    <li><a class="dropdown-item" href="/hommes.php">Hommes</a></li>
                    <li><a class="dropdown-item" href="/femmes.php">Femmes</a></li>
                    <li><a class="dropdown-item" href="/enfants.php">Enfants</a></li>
                </ul>
                <li class="nav-item mx-3 ">
                <a class="nav-link bi bi-telephone-fill" href="/contact.php">  CONTACT</a>
                </li>
                <li class="nav-item mx-3">
                <a class="nav-link bi bi-person-circle" href="/monespace.php">  MON ESPACE</a>
                </li>
                <li class="nav-item mx-3">
                <a class="nav-link bi bi-basket-fill" href="#">  PANIER</a>
                </li>
                </li>
            </ul>
            </div>
        </div>
        </nav>
        <header>
            <picture>
                <img class="w-100" height="450px"src="<?= $img ?>" alt="">
            </picture>
            <div class="texttop">            
                <p class="display-2 "><strong><?= $titre ?></strong></p>
            </div>
        </header>