<?php include PATH_COMPS . "c_all.php"; ?>

<div class="text-center my-4">
    <h2>
        Gestion des visiteurs
    </h2>
</div>

<div class="d-flex justify-content-between align-items-center">
    <!-- Counter -->
    <div class="fs-5">
        <span class="badge bg-secondary">Total : <?= $totalVisiteurs ?> visiteurs</span>
    </div>

    <!-- Pagination -->
    <div class="d-flex gap-3">
        <!-- Bouton Précédent -->
        <a href="?uc=gererVisiteur&page=<?= $page - 1 ?>" 
           class="btn btn-outline-primary rounded-circle <?= $page <= 1 ? 'disabled' : '' ?>" 
           aria-label="Précédent">
            <i class="bi bi-arrow-left"></i>
        </a>

        <!-- Bouton Suivant -->
        <a href="?uc=gererVisiteur&page=<?= $page + 1 ?>" 
           class="btn btn-outline-primary rounded-circle <?= $page >= $maxPages ? 'disabled' : '' ?>" 
           aria-label="Suivant">
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Rôle</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($visiteurs as $v) { ?>
            <tr>
                <th scope="row">#<?= $v['id'] ?></th>
                <th><?= $v['nom'] ?></th>
                <th><?= $v['prenom'] ?></th>
                <th><?php
                    $color = ["Directeur" => "warning", "Comptable" => "primary", "Visiteur" => "success"][$v['role']];
                    $text = $v['role'];
                    // echo renderBadge($color, $text);
                    include PATH_COMPS . 'c_badge.php';
                    ?></th>
                <th class="d-flex gap-2">
                    <?php
                    $text = "";
                    $link = "";
                    $color = "primary";
                    $icon = "bi bi-pen";
                    $tooltip = "Modifier le visiteur";
                    include PATH_COMPS . 'c_link.php';
                    ?>
                    <?php
                    $link = "";
                    $color = "primary";
                    $icon = "bi bi-envelope-open";
                    $tooltip = "Gérer ces frais";
                    include PATH_COMPS . 'c_link.php';
                    ?>
                </th>
            </tr>
        <?php } ?>
    </tbody>
</table>