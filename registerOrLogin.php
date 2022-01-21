<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <!--Lien bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Projet convention geek</title>
</head>
<body class="bg-white">
<nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
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

    <h2 class="text-center mt-4 fs-1">Inscription/Connection</h2>
    <div class="container">
        <div class="row" id="rowIm">
            <h3 class="text-center mt-3 mb-5">Je suis :</h3>
            <div class="col-6 text-center">
                <a class="btn btn-outline-success w-75" href="visitors.php">Je suis un visiteur</a>
            </div>
            <div class="col-6 text-center">
                 <a class="btn btn-outline-success w-75" href="exposants.php">Je suis un exposants</a>
            </div>
        </div>
    </div>
    <div class="footer bg-dark" id="footerChoice">
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
    <script src="assets/js/cleave.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>