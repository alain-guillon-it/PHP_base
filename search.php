<?php

/**
 * - faire un moteur de recherche qui affiche tous les jeux de l'utilisateur choisi
 * - Afficher le nom de l'utilisateur en Majuscule
 * 
 * Afficher le nom de l’utilisateur en Majuscule et son prénom avec la première lettre en majuscule
 * Affiche son nombre d’heure total de jeux :
 * Si il est inférieure à 50 l’écrire en vert 
 * Si il est compris entre  50 et 100 le mettre en orange
 * Si il est supérieure à 100 l’écrire en rouge
 */

require("./utils.php");

if (isset($_GET["search"]) && empty($_GET["search"])) {
    header("Location: /liste_user.php");
}

$search = trim(htmlspecialchars($_GET["search"]));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark"  data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-2" href="/liste_user.php">TP_1 Jeff Game</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form action="/search.php" method="get" class="d-flex me-2" role="search">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid d-flex justify-content-between">
        <div class="col-6">
            <?php
            foreach ($users as $user) :
                if (strtoupper($search) === $user["lastname"] || ucfirst($search) === $user["firstname"]) : ?>
                    <div class="card my-5 shadow" style="width: 36rem;">
                        <div class="card-header  d-flex justify-content-center">
                            <?= $user['lastname']; ?> <?= $user['firstname']; ?>
                        </div>
                        <div class="card-body">
                            <h3>Jeux Vidéo</h3>
                            <ul class="list-group list-group-flush">
                                <?php foreach ($user["games"] as $game) : ?>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span><?= $game[0]; ?></span>
                                        <span class="badge bg-<?= badgeColor($game[1]) ?>"><?= $game[1]; ?> heures</span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <?php
                            $totalHour = 0;
                            foreach ($user["games"] as $game) {
                                $totalHour += $game[1];
                            }
                            ?>
                            <span>Temps joué au total</span> <span style=" color: #aa5555"><strong><?= $totalHour ?> heures</strong></span>
                        </div>
                    </div>
            <?php endif;
            endforeach;
            ?>
        </div>
    </div>
</body>

</html>