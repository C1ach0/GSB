<?php

/**
 * Vue Liste des mois
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
 * @link      https://getbootstrap.com/docs/5.0/ Documentation Bootstrap v5
 */

?>
<h2 class="my-4">Mes fiches de frais</h2>
<div class="row">
    <div class="col-md-4">
        <h3 class="mb-3">Sélectionner un mois :</h3>
    </div>
    <div class="col-md-6">
        <form action="index.php?uc=etatFrais&action=voirEtatFrais" method="post" role="form">
            <div class="mb-3">
                <label for="lstMois" class="form-label">Mois :</label>
                <select id="lstMois" name="lstMois" class="form-select">
                    <?php
                    foreach ($lesMois as $unMois) {
                        $mois = $unMois['mois'];
                        $numAnnee = $unMois['numAnnee'];
                        $numMois = $unMois['numMois'];
                        if ($mois == $moisASelectionner) {
                            ?>
                            <option selected value="<?php echo $mois ?>">
                                <?php echo $numMois . '/' . $numAnnee ?>
                            </option>
                            <?php
                        } else {
                            ?>
                            <option value="<?php echo $mois ?>">
                                <?php echo $numMois . '/' . $numAnnee ?>
                            </option>
                            <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="d-flex gap-2">
                <button id="ok" type="submit" class="btn btn-success">
                    Valider
                </button>
                <button id="annuler" type="reset" class="btn btn-danger">
                    Effacer
                </button>
            </div>
        </form>
    </div>
</div>