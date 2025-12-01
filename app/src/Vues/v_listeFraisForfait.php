<?php

/**
 * Vue Liste des frais au forfait
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
<div class="row">
    <h2 class="my-4">Renseigner ma fiche de frais du mois
        <?php echo $numMois . '-' . $numAnnee ?>
    </h2>
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="mb-3">Éléments forfaitisés</h3>
            <div class="col-md-6">
                <form method="post"
                    action="index.php?uc=gererFrais&action=validerMajFraisForfait"
                    role="form" class="needs-validation" novalidate>
                    <?php
                    foreach ($lesFraisForfait as $unFrais) {
                        $idFrais = $unFrais['idfrais'];
                        $libelle = htmlspecialchars($unFrais['libelle']);
                        $quantite = $unFrais['quantite']; ?>
                        <div class="mb-3">
                            <label for="idFrais_<?php echo $idFrais ?>" class="form-label">
                                <?php echo $libelle ?>
                            </label>
                            <input type="number" id="idFrais_<?php echo $idFrais ?>"
                                name="lesFrais[<?php echo $idFrais ?>]"
                                class="form-control"
                                value="<?php echo $quantite ?>"
                                required>
                            <div class="invalid-feedback">
                                Veuillez renseigner une quantité valide.
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-success" type="submit">Ajouter</button>
                        <button class="btn btn-secondary" type="reset">Effacer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>