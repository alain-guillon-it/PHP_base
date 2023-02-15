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

echo "<pre>";
print_r($users);
echo "</pre>";

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
    <div class="container-fluid">

        <form action="/search.php" method="get" class="mt-5 mx-5">
            <div class="col-8">
                <input class="form-control my-3" type="text" name="search" placeholder="veuillez taper botre prénom">
                <button type="submit" class="btn btn-primary">Rechercher</button>
            </div>
        </form>
        <div class="col-8 mx-5 my-5">
            <div class="table table-striped table-hover">
                <table>
                    <thead>
                        <tr>
                            <th class="py-2 px-5" scope="col">Nom</th>
                            <th class="py-2 px-5" scope="col">Prénom</th>
                            <th class="py-2 px-5" scope="col">Jeux-Vidéo</th>
                            <th class="py-2 px-5" scope="col">Temps Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Je compte le nombre d'utilisateurs -->
                        <?php for ($i = 0; $i < count($users); $i++): ?>
                            <tr>
                            <?php foreach ($users[$i] as $games): ?>
                                <td class="py-2 px-5" scope="col">
                                    <?php for ( $j = 0; $j < count($users[$i]); $i++): ?>     
                                        <?php print_r($games[$j]) ?>
                                    <?php endfor; ?>

                                    <?php if (is_array($value)): ?>
                                        <?php foreach($value as $key => $game) : ?>
                                            <!-- <span class="badge bg-secondary mx-3"><?= $game; ?> <span class="badge bg-danger mx-2 p-1"><?= $games[$key]["time"]; ?> min</span></span> -->
                                        <?php endforeach; ?>  
                                    <?php else: ?>
                                        <?= $value ?>
                                    <?php endif; ?>
                                </td>
                            <?php endforeach; ?>
                            </tr>
                       
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>