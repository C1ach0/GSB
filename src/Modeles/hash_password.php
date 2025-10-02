<?php

namespace Modeles;

define('SALT', "ch@ineDeC@ractèresAlé@toires");

use Exception;
use PDO;

// Inclure la classe PdoGsb
require __DIR__ . '/PdoGsb.php';

// Obtenir l'instance de PdoGsb
$pdo = PdoGsb::getPdoGsb();

try {
    // Étape 1 : Récupérer tous les utilisateurs avec leurs mots de passe en clair
    $sql = 'SELECT id, login, mdp FROM visiteur';
    $stmt = $pdo->connexion->prepare($sql);
    $stmt->execute();
    $visiteurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Étape 2 : Parcourir chaque utilisateur et hacher son mot de passe
    foreach ($visiteurs as $visiteur) {
        $id = $visiteur['id'];
        $mdpClair = $visiteur['mdp'];

        // Ajouter le salt au mot de passe avant de le hacher
        $mdpAvecSalt = $mdpClair . SALT;

        // Hacher le mot de passe avec bcrypt
        $mdpHash = password_hash($mdpAvecSalt, PASSWORD_BCRYPT);

        // Étape 3 : Mettre à jour le mot de passe haché dans la base de données
        $updateSql = 'UPDATE visiteur SET mdp = :mdp WHERE id = :id';
        $updateStmt = $pdo->connexion->prepare($updateSql);
        $updateStmt->bindParam(':mdp', $mdpHash, PDO::PARAM_STR);
        $updateStmt->bindParam(':id', $id, PDO::PARAM_STR);
        $updateStmt->execute();
    }

    echo "Tous les mots de passe ont été hachés avec succès !";

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}