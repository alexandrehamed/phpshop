<?php

$host = "localhost";
$dbName = "mydb"; // le nom de base que vous avez créée
$user =  "root" ;
$password = "root"; // laisser vide sous wamp, "root" sous mamp

// on tente la connexion
try {
	$db = new PDO ('mysql:host='.$host.';dbname='.$dbName.';charset=utf8', $user, $password);
}
// si elle rate, on affiche l'erreur
catch (Exception $e) {
	die('Erreur : '.$e->getMessage());
}
