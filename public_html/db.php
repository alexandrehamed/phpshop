<?php
$host = "mysql.hostinger.fr";
$dbName = "u309309493_dis";
$user="u309309493_dis";
$password= "disney";
try {
	$db = new PDO("mysql:host=".$host.";dbname=".$dbName.
		"; charset=utf8", $user, $password);
	}
	catch( Exception $e){
		die("Erreur : " .$e->getMessage());
	}
?>
