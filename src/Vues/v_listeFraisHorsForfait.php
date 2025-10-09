<?php

/**
 * Vue Liste des frais hors forfait
 *
 * PHP Version 8
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA
 * @author    José GIL
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 * @link      https://getbootstrap.com/docs/5.0/ Documentation Bootstrap v5
 */

?>
<hr>
<div class="row">
    <div class="card">
        <div class="card-body">
            <h3>Descriptif des éléments hors forfait</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Libellé</th>
                            <th scope="col">Montant</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($lesFraisHorsForfait as $unFraisHorsForfait) {
                            $libelle = htmlspecialchars($unFraisHorsForfait['libelle']);
                            $date = $unFraisHorsForfait['date'];
                            $montant = $unFraisHorsForfait['montant'];
                            $id = $unFraisHorsForfait['id']; ?>
                            <tr>
                                <td><?php echo $date ?></td>
                                <td><?php echo $libelle ?></td>
                                <td><?php echo $montant ?> €</td>
                                <td>
                                    <a href="index.php?uc=gererFrais&action=supprimerFrais&idFrais=<?php echo $id ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');">
                                        Supprimer
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow-sm mt-4">
        <div class="card-body">
            <div class="row">
                <h3>Nouvel élément hors forfait</h3>
                <div class="col-md-6">
                    <form action="index.php?uc=gererFrais&action=validerCreationFrais"
                        method="post" role="form">
                        <div class="mb-3">
                            <label for="txtDateHF" class="form-label">Date (jj/mm/aaaa):</label>
                            <input type="date" id="txtDateHF" name="dateFrais"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtLibelleHF" class="form-label">Libellé</label>
                            <input type="text" id="txtLibelleHF" name="libelle" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtMontantHF" class="form-label">Montant:</label>
                            <div class="input-group">
                                <span class="input-group-text">€</span>
                                <input type="text" id="txtMontantHF" name="montant" class="form-control">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-success" type="submit">Ajouter</button>
                            <button class="btn btn-secondary" type="reset">Effacer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>