<?php

/**
 * Vue Connexion
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
<div class="container d-flex flex-column justify-content-center align-items-center" style="height: 70vh;">
    <div class="row justify-content-center w-100">
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Connexion</h3>
                    <form method="post" action="index.php?uc=connexion&action=valideConnexion">
                        <div class="mb-3">
                            <label for="login" class="form-label">Login</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input id="login" class="form-control" placeholder="Entrez votre login" name="login" type="text" maxlength="45" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="mdp" class="form-label">Mot de passe</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input id="mdp" class="form-control" placeholder="Entrez votre mot de passe" name="mdp" type="password" maxlength="45" required>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">Se connecter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>