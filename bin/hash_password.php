<?php

define('SALT', "ch@ineDeC@ractèresAlé@toires"); // Ce sel n'est pas utilisé avec password_hash
define('DB_URL', "localhost");
define('DB_USER', "userGsb");
define('DB_PWD', "secret");
define('DB_NAME', "gsb_frais");
define('DB_DSN', "mysql:host=" . DB_URL . ";dbname=" . DB_NAME . ";charset=UTF8");

try {
    $conn = new PDO(DB_DSN, DB_USER, DB_PWD);

    $sql = 'SELECT id, login, mdp FROM visiteur';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $visiteurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($visiteurs as $visiteur) {
        $id = $visiteur['id'];
        $mdpClair = $visiteur['mdp'];

        // Hacher le mot de passe avec bcrypt, sans option salt
        $mdpHash = password_hash($mdpClair, PASSWORD_DEFAULT);

        // Mettre à jour le mot de passe haché dans la base de données
        $updateSql = 'UPDATE visiteur SET mdp = :mdp WHERE id = :id';
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bindParam(':mdp', $mdpHash, PDO::PARAM_STR);
        $updateStmt->bindParam(':id', $id, PDO::PARAM_STR);
        $updateStmt->execute();
    }

    echo "Tous les mots de passe ont été hachés avec succès !";

} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}