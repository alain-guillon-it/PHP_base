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

if ( isset($_GET["search"]) && empty($_GET["search"])) {
    header("Location: /liste_user.php");
} 
    
$search = strtoupper(trim(htmlspecialchars($_GET["search"])));
// var_dump($search);

// echo "<pre>";
// var_dump($users);
// // var_dump($search);
// echo "</pre>";

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
    <div class="container">
        <div class="col-8">
            <?php 
                foreach( $users as $user ):
                    if ($search == $user["lastname"]): ?>
                        <div class="card my-5" style="width: 36rem;">
                            <div class="card-header">
                                <?= $user['lastname']; ?> <?= $user['firstname']; ?>
                            </div>
                            <div class="card-body">
                                <h3>Jeux Vidéo</h3>
                                <ul class="list-group list-group-flush">
                                    <?php foreach($user["games"] as $game): ?>
                                        <li class="list-group-item"><?= $game; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif;     
                endforeach;
                
                if (isset($search) && $users[0]["lastname"] != $search) : ?>
                    <div class="alert alert-info mt-5 mx-5 p-3">
                        Désolé aucune utilisateur ne correspond :D
                    </div>
                <?php endif ?>

            
                
        </div>
    </div>
</body>
</html>