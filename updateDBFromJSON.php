<?php
    // Connectez vous à la BDD ici
    $host = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "mydb";
    $con = mysqli_connect($host, $username, $password, $dbname) or die('Error in Connecting: ' . mysqli_error($con));

    // Récupérerz les fichiers JSON
    $jsongames = file_get_contents('games.json');
    $jsongenres = file_get_contents('genres.json');

    // Convertissez les fichiers JSON en Tableau PHP
    $games = json_decode($jsongames, true);
    $genres = json_decode($jsongenres, true);

    // Permet de convertir l'id du genre en son nom
    function getGenreById($id) {
      for($genres as $genre) {
        if($genre['id'] == $id) {
          return $genre['name'];
        }
      }
    }

    for($games as $game) {
      // Préparez votre commande SQL
      $stmt = $mysqli->prepare("INSERT INTO test(id) VALUES (?)");

      // Insérez vos paramètres du jeu ici. Exemple :
      $stmt->bindParam(':nom_jeu', $game['name']);

      // Exécutez
      $stmt->execute();

      // récupérez l'id de votre jeu pour les autres éléments à insérer
      $gameid = $pdo->lastInsertId();

      for($game['screenshots'] as $screenshot) {
        //Même méthode : préparez votre commande SQL, insérez vos paramètres, exécutez
      }

      for($game['videos'] as $videos) {
        //Même méthode : préparez votre commande SQL, insérez vos paramètres, exécutez
      }

      //Etc.
    }
?>
