<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projet_geek</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
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
  <div class="container-fluid videoContainer">
    <video autoplay muted loop src="assets/img/yt5s.com-Omar.mp4" id="home-page"></video>
    <div class="headerBtn">
      <div class="row d-flex">
        <img src="assets/img/LOGO-RVF.png" class="mx-auto" alt="logo">
      </div>
      <div class="row col justify-content-center headerBtnTop">
        <button class="btn btnHeader col-2 w-25 mb-5 me-5 btn btn-warning "><a href="activities.php" class="link-light text-decoration-none colortext fw-bold">VOIR LES ACTIVITÉS</a></button>
        <button class="btn btnHeader col-2 w-25 mb-5 btn btn-warning"><a href="exposants.php" class="link-light text-decoration-none colortext fw-bold">LISTE DES EXPOSANTS</a></button>
      </div>
      <div class="row col justify-content-center">
        <button class="btn btnHeader col-2 w-25 mb-5 btn btn-warning"><a href="#" class="link-light text-decoration-none colortext fw-bold">CONTACTEZ-NOUS</a></button>
      </div>
    </div>
  </div>
</header>
<div class="container mt-5">
  <div class="row text-center">
    <div class="container fw-bold">
      <h1 id="headline">LA COMPIEGNE CONVENTION DÉBUTERA </h1>
      <div class="col">
        <p class="fs-1 colorp fw-bold"><span id="days"></span> JOURS
          <span id="hours"></span> HEURES
          <span id="minutes"></span> MINUTES
          <span id="seconds"></span> SECONDES
        </p>

      </div>
    </div>
  </div>
</div>
</div>
<!-- Carousel -->
<div id="carouselExampleDark" class="carousel carousel-dark slide mt-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="assets/img/istockphoto-1187064129-612x612.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-white fs-2">2018</h5>
        <p class="text-white fs-5">l'éditions 2018 s'est déroulé majoritairement sur le jeux call of duty avec une influence de 1300 personnes en présentiel</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="assets/img/istockphoto-1190647327-612x612.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-white fs-2">2019</h5>
        <p class="text-white fs-5">l'éditions 2019 s'est déroulé majoritairement sur le jeux counter strike avec une influence de 1876 personnes en présentiel</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/istockphoto-959427344-612x612.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-white fs-2">2020</h5>
        <p class="text-white fs-5">L'édition 2020 s'est déroulé majoritairement sur le jeux fortnite et avec une influence record de 2500 personnes en distanciel</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- End Carousel -->

<!-- Program -->
<div class="footer bg-dark">
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
<script src="assets/js/script.js"></script>
</body>

</html>