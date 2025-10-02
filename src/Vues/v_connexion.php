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
 * @link      https://getbootstrap.com/docs/3.3/ Documentation Bootstrap v3
 */

?>
<div class="container d-flex flex-column justify-content-center align-content-center" style="height: 75vh;">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <div class="card py-5">
                <div class="card-body">
                    <h3 class="card-title text-center mb-3">Identification utilisateur</h3>
                    <form method="post" action="index.php?uc=connexion&action=valideConnexion">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input class="form-control" placeholder="Login" name="login" type="text" maxlength="45">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input class="form-control" placeholder="Mot de passe" name="mdp" type="password" maxlength="45">
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Se connecter">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>