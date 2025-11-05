<?php

/**
 * Vue Accueil
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
 */

?>
<?php if ($_SESSION['role'] == 'Visiteur') { ?>
    <div class="alert alert-warning" role="alert">
        <strong>Rappel :</strong> Vos frais sont à déclarer au plus tard le dernier jour du mois 
        et vos factures acquittées doivent être arrivées aux services comptables au plus tard le 10 du mois suivant la saisie.
        Les éléments reçus après le 10 seront reportés sur le mois suivant.
    </div>
<?php } ?>
<div id="accueil" class="text-center my-4">
    <h2>
        Gestion des frais<small class="text-muted"> - <?= $_SESSION['role'] ?> : <?= htmlspecialchars($_SESSION['prenom'] . ' ' . $_SESSION['nom']) ?></small>
    </h2>
</div>
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title mb-0">
                    <i class="bi bi-bookmark-fill"></i> Navigation
                </h3>
            </div>
            <div class="card-body">
                <div class="d-grid gap-3">
                    <?php if($_SESSION['role'] == 'Directeur') { ?>
                        <!-- TODO: envisager dans le futur des boutons ici -->
                    <?php } else if($_SESSION['role'] == 'Comptable') { ?>
                        <a href="index.php?uc=gererFrais&action=gestionFrais" class="btn btn-success btn-lg">
                            <i class="bi bi-pencil-fill"></i>
                            <br>Gestion des fiches de frais
                        </a>
                    <?php } else { ?>
                        <a href="index.php?uc=gererFrais&action=saisirFrais" class="btn btn-success btn-lg">
                            <i class="bi bi-pencil-fill"></i>
                            <br>Renseigner la fiche de frais
                        </a>
                        <a href="index.php?uc=etatFrais&action=selectionnerMois" class="btn btn-primary btn-lg">
                            <i class="bi bi-list-ul"></i>
                            <br>Afficher mes fiches de frais
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>