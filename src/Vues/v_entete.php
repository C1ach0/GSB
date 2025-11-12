<?php

/**
 * Vue Entête
 *
 * PHP Version 8
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org
 */

?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="./styles/style.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            overflow-y: auto;
            position: sticky;
            top: 0;
        }

        .nav-link:hover {
            background-color: #007bff;
            color: white !important;
        }

        .content {
            min-height: 100vh;
        }
    </style>
</head>

<body>
<?php
$uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if ($estConnecte) { ?>
<div class="container-fluid">
<div class="row">
<nav class="col-md-3 col-lg-2 sidebar bg-light p-3">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
        <span class="fs-5 fw-semibold">GSB</span>
    </a>
    <ul class="list-unstyled fw-normal pb-1 small d-flex flex-column gap-2">
        <li class="nav-item">
            <a href="/" class="nav-link d-flex align-items-center gap-2 py-2 px-3 rounded 
            <?php if (!$uc || $uc == 'accueil') {
                echo "active bg-" . $_SESSION['role'] == "Comptable" ? "warning" : "primary" . " text-white";
            } ?>" style="transition: background-color 0.3s, color 0.3s;">
                <i class="bi bi-house"></i>
                <span>Accueil</span>
            </a>
        </li>
        <?php if($_SESSION['role'] == 'Directeur' || $_SESSION['role'] == 'Comptable') { ?>
            <?php if($_SESSION['role'] == 'Directeur') { ?>

            <?php } else if($_SESSION['role'] == 'Comptable') { ?>
                <li class="nav-item">
                    <a href="/?uc=gererFrais&action=gestionFrais" class="nav-link d-flex align-items-center gap-2 py-2 px-3 rounded 
                    <?php if ($uc == 'gererFrais') {
                        echo "active bg-" . $_SESSION['role'] == "Comptable" ? "warning" : "primary" . " text-white";
                    } ?>" style="transition: background-color 0.3s, color 0.3s;">
                        <i class="bi bi-pencil"></i>
                        <span>Gestion des fiches de frais</span>
                    </a>
                </li>
            <?php } ?>
            <li class="nav-item">
                <a href="/?uc=gererVisiteur" class="nav-link d-flex align-items-center gap-2 py-2 px-3 rounded 
                <?php if ($uc == 'gererVisiteur') {
                    echo "active bg-" . $_SESSION['role'] == "Comptable" ? "warning" : "primary" . " text-white";
                } ?>" style="transition: background-color 0.3s, color 0.3s;">
                    <i class="bi bi-people"></i>
                    <span>Gestion des visiteurs</span>
                </a>
            </li>
        <?php } else { ?>
            <li class="nav-item">
                <a href="/?uc=gererFrais&action=saisirFrais" class="nav-link d-flex align-items-center gap-2 py-2 px-3 rounded 
                <?php if ($uc == 'gererFrais') {
                    echo "active bg-" . $_SESSION['role'] == "Comptable" ? "warning" : "primary" . " text-white";
                } ?>" style="transition: background-color 0.3s, color 0.3s;">
                    <i class="bi bi-pencil"></i>
                    <span>Renseigner la fiche de frais</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/?uc=etatFrais&action=selectionnerMois" class="nav-link d-flex align-items-center gap-2 py-2 px-3 rounded 
                <?php if ($uc == 'etatFrais') {
                    echo "active bg-" . $_SESSION['role'] == "Comptable" ? "warning" : "primary" . " text-white";
                } ?>" style="transition: background-color 0.3s, color 0.3s;">
                    <i class="bi bi-list"></i>
                    <span>Afficher mes fiches de frais</span>
                </a>
            </li>
        <?php } ?>
        <li class="nav-item">
            <a href="/?uc=deconnexion&action=demandeDeconnexion" class="nav-link d-flex align-items-center gap-2 py-2 px-3 rounded 
            <?php if ($uc == 'deconnexion') {
                echo "active bg-" . $_SESSION['role'] == "Comptable" ? "warning" : "primary" . " text-white";
            } ?>" style="transition: background-color 0.3s, color 0.3s;">
                <i class="bi bi-box-arrow-right"></i>
                <span>Déconnexion</span>
            </a>
        </li>
    </ul>
</nav>
<main class="col-md-9 col-lg-10 content p-3">
<?php } else { ?>
    <div class="text-center d-flex flex-column gap-2 align-items-center justify-content-center">
        <img src="./images/logo.jpg" class="img-fluid mx-auto" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin">
        <h1>Laboratoire Galaxy-Swiss Bourdin</h1>
    </div>
<?php } ?>
                