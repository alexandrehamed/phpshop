<?php
require_once ('db.php');


$sMoi =
'
select *
from users
where id = "'.$_SESSION['id'].'"
';
$oMoi				=	$dbh->query($sMoi);
$aMoi				=	$oMoi->fetchAll(PDO::FETCH_ASSOC);
if(!empty($_POST['modifier'])){
  $sModifier = '
UPDATE users
SET pseudo = :pseudo,
    email = :email
WHERE id = :id
  ';
  $aParamUser			=	[
  ':pseudo'			=>	$_POST['pseudo'],
  ':email'				=>	$_POST['email'],
  ':id'				=>	$_SESSION['id']
  ];

  $oModifier	=	$dbh->prepare ( $sModifier );
  $bReturn = $oModifier->execute( $aParamUser );
  if ($bReturn == 0 ) {
    echo 'ok';
  } else {

    header('Location: profil.php');
  }
}
