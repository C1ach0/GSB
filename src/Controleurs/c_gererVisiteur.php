<?php


use Outils\Utilitaires;

$visiteur = filter_input(INPUT_GET, 'visiteur', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if($visiteur) {

} else {
    $limit = 20;
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Page acteulle (default: 1)
    $offset = ($page - 1) * $limit;
    $visiteurs = $pdo->getLesVisiteurs($limit, $offset);
    $totalVisiteurs = $pdo->countVisiteurs();
    $maxPages = ceil($totalVisiteurs / $limit); 
    include PATH_VIEWS . 'v_gestionVisiteur.php';
}