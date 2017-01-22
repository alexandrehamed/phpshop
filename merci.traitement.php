<?php
require_once ('config.php');

$sPanier ='
select *
from Panier, Jeux
where Panier.jeux_id = Jeux.jeux_id
and user_id = "'.$_SESSION['id'].'"
';
$oPanier				=	$bdd->query($sPanier);
$aPanier				=	$oPanier->fetchAll(PDO::FETCH_ASSOC);

foreach($aPanier as $key => $value){
  $sInsert ='
  INSERT INTO
  `Bibliotheques`
      (
        `jeux_id`,`user_id`,`temps_de_jeux`
      )
  VALUES
    (
      :jeux_id,:user_id,:temps_de_jeux
    );
  ';
  $aParamUser			=	[
  ':jeux_id'			=>	$value['jeux_id'],
  ':user_id'			=>	$_SESSION['id'],
  ':temps_de_jeux'			=> 0,

  ];
  //var_dump($aPanier[0]['jeux_id'],$_SESSION['id']);exit();

  $oInsert	=	$bdd->prepare ( $sInsert );
  $bReturn = $oInsert->execute( $aParamUser );
}





  $bdd->exec($sMerci = '

  DELETE FROM `Panier`
  WHERE user_id = "'.$_SESSION['id'].'"

  ');
