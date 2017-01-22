<?php
require_once ('db.php');


if ( empty( $_POST['inscription'] ) ) {
	$pseudo=$password=$confirme_password=$email=$confirme_email= '';
} elseif ( !empty( $_POST['inscription']) ) {
	$pseudo					     =	( !empty( $_POST['pseudo'] ) )				   ?	htmlentities( $_POST['pseudo'] )						: '';
	$password					   =	( !empty( $_POST['password'] ) )			   ?	md5(htmlentities( $_POST['password'] ))					: '';
	$confirme_password	 =	( !empty( $_POST['confirme_password'] ) )?	md5(htmlentities( $_POST['confirme_password'] )	)		: '';
	$email				       =	( !empty( $_POST['email'] ) )		         ?	htmlentities($_POST['email'] )				: '';
	$confirme_email			 =	( !empty( $_POST['confirme_email'] ) )	 ?	htmlentities($_POST['confirme_email']) 				: '';
	$aError					=	array();
// Récupération de l'utilisateur
	$sUser					=	'
		SELECT email
<<<<<<< HEAD
		FROM Users
=======
		FROM users
>>>>>>> 97eab93f464e6c24bc0ea4c79dedd428be22a8fc
		where email = :email
	';
	$aParamUser				=	[
		':email'			=>	$email,
	];
// ---
// Préparation et execution de la requête
	$oQuery					=	$dbh->prepare( $sUser );
	$oQuery->execute( $aParamUser );
	$aUser					=	$oQuery->fetch();
// ---
	// echo '<pre>';
	// var_dump(
		// $aParamUser,
		// $oQuery,
		// $aUser,
		// $password
	// );

	if (empty($pseudo) ) {
		$aError[]			=		'Veuillez saisir un nom';
	} elseif (preg_match('/[;\.,?:!_\?+=§%<>$@\\\[\]\{\}`\#\(\)\*µ£\|\/]/', $pseudo) || strlen($pseudo) > 50) {
		$aError[]			=		' Votre nom n\'a pas bien été saisie';
	}
  if ( empty($password) ) {
    $aError[]			=		'Veuillez saisir un mot de passe';
  }
  if ( empty($confirme_password) ) {
    $aError[]			=		'Veuillez saisir la vérification de votre mot de passe';
  } elseif ( $password != $confirme_password ) {
    $aError[]			=		'Votre mot de passe n\'a pas été bien saisie dans un des deux champs';
  }
  if ( empty($email) ) {
    $aError[]			=		'Veuillez saisir votre adresse email';
  } elseif (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
    $aError[]			=		'Veuillez vérifier la synthaxe de votre adresse email';
  } elseif (!empty($aUser) ) {
    $aError[]			=		'Cette adresse email existe déjà, veuillez en saisir une autre ou vérifier l\'orthographe';
  }
  if ( empty($confirme_email) ) {
    $aError[]			=		'Veuillez saisir votre la vérification de l\'adresse email';
  } elseif (!(filter_var($confirme_email, FILTER_VALIDATE_EMAIL))) {
    $aError[]			=		'Veuillez vérifier la synthaxe de votre vérification d\'adresse email';
  } elseif ($email != $confirme_email){
    $aError[]			=		'Votre email n\'a pas été bien saisie dans un des deux champs';
  }



	if ( empty ( $aError )){

		$sQuery				=	'
			INSERT INTO
      `users`
					(
						`pseudo`,`email`,`password`
					)
			VALUES
				(
					:pseudo,:email,:password
				)
			;
		';
		$aParamUser			=	[
		':pseudo'			=>	$pseudo,
		':email'				=>	$email,
		':password'				=>	$password,
		];

		$oQuery	=	$dbh->prepare ( $sQuery );
		$bReturn = $oQuery->execute( $aParamUser );
		if ($bReturn == 0 ) {
		$aError[]			=		'Une erreur est survenue veuillez contacter un adminitrateur';
		} else {

			header('Location: login.php');
		}
	}
}
