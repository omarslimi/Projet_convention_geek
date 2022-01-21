<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projet_geek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bgColorActivities">
    <header>
        <!-- Navbar -->
        <!-- navbar navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="index.php">
                    CGC / Janvier 25 - 26, 2022</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="activities.php">activités</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="registers.php">exposants inscrits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white" href="registerOrLogin.php" id="navbarDropdownMenuLink">
                                Inscription
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--banner  -->
        <h3 class="text-center fs-1" id="titleRegisters">activités prévues</h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6" id="box">
                    <div class="card mb-3 mx-auto" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="assets/img/lan.png" class="img-fluid rounded-start h-100" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">GAMERS GARDEN</h5>
                                    <p class="card-text">Gamers Garden est une association qui regroupe les gamers de l’Oise lors de sessions organisées plusieurs fois par mois.</p>
                                    <p class="card-text"><small class="text-muted">publié il y a 2 semaines</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="w-50 mx-auto text-white">
                    <div class="card mb-3 mx-auto" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="assets/img/pc.png" class="img-fluid rounded-start h-100" alt="pc">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">ON-LAN</h5>
                                    <p class="card-text">L’association On-Lan proposera des animations en libre-accès sur leur stand avec différents jeux sur PC et d’autres surprises…</p>
                                    <p class="card-text"><small class="text-muted">publié il y a 1 semaines</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="w-50 mx-auto text-white">
                    <div class="card mb-3 mx-auto" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="assets/img/nitendo.png" class="img-fluid rounded-start h-100" alt="nitendo">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">activités</h5>
                                    <p class="card-text">L’Association NemcoShow sauvegarde et partage le patrimoine vidéoludique. Avec plus de 10.000 pièces. </p>
                                    <p class="card-text"><small class="text-muted">Des bornes Nintendo, Sony, Microsoft et Sega seront en libre-accès tout au long du week-end</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6" id="logo">
                    <img src="assets/img/ZELDA-2.png" alt="zelda" class="w-50 ms-5">
                </div>
            </div>
        </div>
        <!-- Program -->
        <div class="footer bg-dark" id="footerPageRegisters">
            <footer>
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                            <li><a href="#" class="text-decoration-none text-white">activités</a></li>
                        <li><a href="#" class="text-decoration-none text-white">exposants inscrits</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>À Propos</h3>
                            <ul>
                                <li><a href="#" class="text-decoration-none text-white">Conditions d'utilisation</a></li>
                                <li><a href="#" class="text-decoration-none text-white">Mentions légales</a></li>
                                <li><a href="#" class="text-decoration-none text-white">Nous Contacter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <p class="copyright text-white text-center">CGC © 2022</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- End Program -->
        </div>









        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>