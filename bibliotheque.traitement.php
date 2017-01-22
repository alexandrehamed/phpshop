<?php
require_once ('config.php');

$sJeux = '
select *
from Bibliotheques, Jeux
where Bibliotheques.jeux_id = Jeux.jeux_id
and user_id = "'.$_SESSION['id'].'"
order by temps_de_jeux desc
';
$oJeux				=	$bdd->query($sJeux);
$aJeux				=	$oJeux->fetchAll(PDO::FETCH_ASSOC);
