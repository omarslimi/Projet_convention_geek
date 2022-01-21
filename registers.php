<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projet_geek</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bgColor">
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
  <h3 class="text-center" id="titleRegisters">exposants inscrits</h3>
  <!--banner  -->
  <table class="table" id="tablePageRegisters">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">Prénom</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
    </tr>
  </tbody>
</table>

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
<script src="assets/js/script.js"></script>
<script src="assets/js/phone.js"></script>
</body>

</html>