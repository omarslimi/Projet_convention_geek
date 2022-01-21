<?php require_once 'controllers/visitorsRegisterController.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <!--Lien bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

    <div class="container">
        <div class="row">
            <h2 class="text-center title">Inscription/Connection</h2>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-6 border">
                <h3 class="pt-3">Je m'inscrit</h3>
                <form action="visitors.php" method="POST">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <label for="user_lastName">Nom</label>
                                <input type="text" class="w-75 form-control <?= isset($formErrors['user_lastName']) ? 'is-invalid' : ''; ?>" value="<?= @$_POST['user_lastName']; ?>" name="user_lastName" id="user_lastName" placeholder="Dupont" />
                                <div id="messageLastName"></div>
                                <?php if (isset($formErrors['user_lastName'])) { ?>
                                    <p class="invalid-feedback"><?= $formErrors['user_lastName'] ?></p>
                                <?php } ?>
                            </div>
                            <div class="col-6">
                                <label for="user_firstName">Prénom</label>
                                <input type="text" class="w-75 form-control <?= isset($formErrors['user_firstName']) ? 'is-invalid' : ''; ?>" value="<?= @$_POST['user_firstName']; ?>" name="user_firstName" id="user_firstName" placeholder="Jean" />
                                <div id="messageFirstName"></div>
                                <?php if (isset($formErrors['user_firstName'])) { ?>
                                    <p class="invalid-feedback"><?= $formErrors['user_firstName'] ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div>
                            <label for="user_mail">Adresse mail</label>
                            <input type="text" class="form-control <?= isset($formErrors['user_mail']) ? 'is-invalid' : ''; ?>" value="<?= @$_POST['user_mail']; ?>" name="user_mail" id="user_mail" placeholder="jean.dupont@lamanu.fr" />
                            <div id="messageMail"></div>
                            <?php if (isset($formErrors['user_mail'])) { ?>
                                <p class="invalid-feedback"><?= $formErrors['user_mail'] ?></p>
                            <?php } ?>
                        </div>
                        <div>
                            <label for="user_phone">Numéro de téléphone</label>
                            <input type="text" class="phone form-control <?= isset($formErrors['user_phone']) ? 'is-invalid' : ''; ?>" value="<?= @$_POST['user_phone']; ?>" name="user_phone" id="user_phone" placeholder="06 25 35 98 58" />
                            <div id="messagePhone"></div>
                            <?php if (isset($formErrors['user_phone'])) { ?>
                                <p class="invalid-feedback"><?= $formErrors['user_phone'] ?></p>
                            <?php } ?>
                        </div>
                        <div>
                            <label for="user_duration" class="form-label">durée de la visite</label>
                            <select name="user_duration" id="user_duration" class="form-select <?= isset($formErrors['user_duration']) ? 'is-invalid' : '' ?>">
                            <div id="messageDuration"></div>
                                <option disabled selected>Choisissez</option>
                                <option value="1 Jour" <?= isset($_POST['user_duration']) && $_POST['user_duration'] == '1 Jour' ? 'selected' : '' ?>>1 Jour</option>
                                <option value="2 Jours" <?= isset($_POST['user_duration']) && $_POST['user_duration'] == '2 Jours' ? 'selected' : '' ?>>2 Jours</option>
                            </select>
                            <?php if (isset($formErrors['user_duration'])) { ?>
                                <p class="invalid-feedback"><?= $formErrors['user_duration'] ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    <input type="submit" value="Valider" class="btn btn-success" />
                </form>
            </div>
        </div>
    </div>
    <div class="footer bg-dark" id="footerVisitors">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/cleave.min.js"></script>
    <script src="assets/js/visitorsCheck.js"></script>
</body>

</html>