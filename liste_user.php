<?php

/**
 * - EXO 1
 * ------------------------------------------------------------------------
 * - Créer un tableau d'utiliateurs
 * - Chaque utilisateur a plusieurs Jeux Vidéo
 * - A l'aide d'une boucle afficher :
 *      - nom utilisateur (en majuscule)
 *      - prénom utilisateur (Première lettre en majuscule)
 *      - liste des jeux videos
 *      - nombre d'heure joué sur chaque jeu
 *      - nombre total d'heure de jeux
 */

require("./utils.php");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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

    <div  action="/search.php" method="get" class="container-fluid">
        <div class="col-10 mx-auto my-5">
            <table class="table table-striped table-hover border shadow text-center">
                <thead>
                    <tr>
                        <th class="py-2 px-5" scope="col">Nom</th>
                        <th class="py-2 px-5" scope="col">Prénom</th>
                        <th class="py-2 px-5" scope="col">Jeux-Vidéo</th>
                        <th class="py-2 px-5" scope="col">Heures jouées</th>
                        <th class="py-2 px-5" scope="col">Temps Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td class="py-2 px-5" scope="col"><?= $user["lastname"] ?></td>
                            <td class="py-2 px-5" scope="col"><?= $user["firstname"] ?></td>
                            <td class="py-2 px-5" scope="col">
                                <?php foreach ($user["games"] as $game) : ?>
                                    <?= $game[0] ?><br>
                                <?php endforeach; ?>
                            </td>
                            <td class="py-2 px-5" scope="col">
                                <?php foreach ($user["games"] as $game) : ?>
                                    <span class="badge bg-<?= badgeColor($game[1]) ?>"><?= $game[1] ?></span><br>
                                <?php endforeach; ?>
                            </td>
                            <td class="py-2 px-5" scope="col">
                                <?php
                                $totalHours = 0;
                                foreach ($user["games"] as $game) {
                                    $totalHours += $game[1];
                                }
                                ?>
                                <span><?= $totalHours ?> heures<br></span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>