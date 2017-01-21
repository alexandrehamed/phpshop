<?php
require_once ('conf.php');

$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8','root','root');

$panier = $bdd->query('SELECT  FROM  ORDER BY  DESC');
