<?php

/**
 * Vue Entête
 *
 * PHP Version 8
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 * @link      https://getbootstrap.com/docs/3.3/ Documentation Bootstrap v3
 */

?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="./styles/style.css" rel="stylesheet">
</head>

<body>
    <div class="">
        <?php
        $uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if ($estConnecte) {
        ?>
            <div class="d-flex-">
                <!-- Sidebar -->
                <div class="d-flex">
                    <div class="flex-shrink-0 p-3 bg-light" style="width: 280px;">
                        <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                            <span class="fs-5 fw-semibold">Sidebar</span>
                        </a>
                        <ul class="list-unstyled ps-0">
                            <li class="mb-1">
                                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                                    Home
                                </button>
                                <div class="collapse show" id="home-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li class="nav-item">
                                            <a href="index.php" class="nav-link <?php if (!$uc || $uc == 'accueil') { echo 'active'; } ?>">
                                                <span class="glyphicon glyphicon-home"></span>
                                                <span class="menu-label">Accueil</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index.php?uc=gererFrais&action=saisirFrais" class="nav-link <?php if ($uc == 'gererFrais') { echo 'active'; } ?>">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                                <span class="menu-label">Renseigner la fiche de frais</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index.php?uc=etatFrais&action=selectionnerMois" class="nav-link <?php if ($uc == 'etatFrais') { echo 'active'; } ?>">
                                                <span class="glyphicon glyphicon-list-alt"></span>
                                                <span class="menu-label">Afficher mes fiches de frais</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index.php?uc=deconnexion&action=demandeDeconnexion" class="nav-link <?php if ($uc == 'deconnexion') { echo 'active'; } ?>">
                                                <span class="glyphicon glyphicon-log-out"></span>
                                                <span class="menu-label">Déconnexion</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Autres éléments de menu -->
                        </ul>
                    </div>
                    <div class="flex-grow-1 p-3 min-h-screen">
                        <!-- <div class="row vertical-align">
                        <div class="col-md-4">
                            <h1>
                                <img src="./images/logo.jpg" class="img-responsive"
                                    alt="Laboratoire Galaxy-Swiss Bourdin"
                                    title="Laboratoire Galaxy-Swiss Bourdin">
                            </h1>
                        </div>
                        <div class="col-md-8">
                            <ul class="nav nav-pills pull-right" role="tablist">
                                <li <?php if (!$uc || $uc == 'accueil') { ?>class="active" <?php } ?>>
                                    <a href="index.php">
                                        <span class="glyphicon glyphicon-home"></span>
                                        Accueil
                                    </a>
                                </li>
                                <li <?php if ($uc == 'gererFrais') { ?>class="active" <?php } ?>>
                                    <a href="index.php?uc=gererFrais&action=saisirFrais">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                        Renseigner la fiche de frais
                                    </a>
                                </li>
                                <li <?php if ($uc == 'etatFrais') { ?>class="active" <?php } ?>>
                                    <a href="index.php?uc=etatFrais&action=selectionnerMois">
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Afficher mes fiches de frais
                                    </a>
                                </li>
                                <li
                                    <?php if ($uc == 'deconnexion') { ?>class="active" <?php } ?>>
                                    <a href="index.php?uc=deconnexion&action=demandeDeconnexion">
                                        <span class="glyphicon glyphicon-log-out"></span>
                                        Déconnexion
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    <?php
                } else {
                    ?>
                        <h1>
                            <img src="./images/logo.jpg"
                                class="img-responsive center-block"
                                alt="Laboratoire Galaxy-Swiss Bourdin"
                                title="Laboratoire Galaxy-Swiss Bourdin">
                        </h1>
                    <?php
                }
