<?php
require_once ('db.php');

$sCategorie   = '
  Select *
  from categorie
';
$oCategorie				=	$dbh->query($sCategorie);
$aCategorie				=	$oCategorie->fetchAll(PDO::FETCH_ASSOC);


$type ='Fps';
$sJeux = '
select *
from jeux, categorie
where jeux.categorie = categorie.categorie_id
';
if(!empty($_GET['type']) && $_GET['type'] != 'Selectionnez une catégorie'){
  $sJeux .= '
  and categorie_nom = "'.$_GET['type'].'"
  ';
}
if(!empty($_GET['recherche'])){
  $sJeux .= '
  AND (
    jeux_nom	like "%'.$_GET['recherche'].'%" OR
    resume 		like "%'.$_GET['recherche'].'%"
    )
  ';
}

$oJeux				=	$dbh->query($sJeux);
$aJeux				=	$oJeux->fetchAll(PDO::FETCH_ASSOC);

//var_dump($sJeux);exit();
