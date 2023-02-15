<?php

// Créer un tableau d'utilisateurs
$users = array(
    array(
      'nom' => 'Dupont',
      'prenom' => 'Pierre',
      'jeux_video' => array(
        array('nom' => 'Super Mario Bros', 'heures_jouees' => 10),
        array('nom' => 'Minecraft', 'heures_jouees' => 20),
        array('nom' => 'Fortnite', 'heures_jouees' => 5)
      )
    ),
    array(
      'nom' => 'Martin',
      'prenom' => 'Sophie',
      'jeux_video' => array(
        array('nom' => 'The Legend of Zelda', 'heures_jouees' => 15),
        array('nom' => 'Overwatch', 'heures_jouees' => 30)
      )
    )
  );
  
  // Afficher les informations pour chaque utilisateur
  foreach ($users as $user) {
    // Nom utilisateur en majuscules
    $nom = strtoupper($user['nom']);
    // Prénom utilisateur avec première lettre en majuscule
    $prenom = ucfirst(strtolower($user['prenom']));
    // Liste des jeux vidéo
    $jeux = '';
    // Nombre total d'heures jouées
    $total_heures = 0;
  
    foreach ($user['jeux_video'] as $jeu) {
      $jeux .= $jeu['nom'] . ', ';
      $total_heures += $jeu['heures_jouees'];
      // Nombre d'heures jouées sur chaque jeu
      $heures_jouees = $jeu['heures_jouees'];
      echo "Nom utilisateur: $nom <br>";
      echo "Prénom utilisateur: $prenom <br>";
      echo "Jeux vidéo: " . rtrim($jeux, ', ') . "<br>";
      echo "Nombre d'heures jouées sur chaque jeu: $heures_jouees <br>";
      echo "Nombre total d'heures de jeux: $total_heures <br>";
      echo "<br>";
    }
  }
  