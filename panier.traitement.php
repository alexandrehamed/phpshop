<?php
require_once ('config.php');

$sPanier = '

select *
from Panier, Jeux
where Panier.jeux_id = Jeux.jeux_id
and user_id = "'.$_SESSION['id'].'"
';
$oPanier				=	$bdd->query($sPanier);
$aPanier				=	$oPanier->fetchAll(PDO::FETCH_ASSOC);

$sPrix = '

select sum(jeux_prix) as jeux_prix
from Panier, Jeux
where Panier.jeux_id = Jeux.jeux_id
and user_id = "'.$_SESSION['id'].'"
';
$oPrix				=	$bdd->query($sPrix);
$aPrix				=	$oPrix->fetchAll(PDO::FETCH_ASSOC);

//var_dump($aPrix[0]['jeux_prix']);exit();
