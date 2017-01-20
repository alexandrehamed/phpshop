
<?php
session_start();
include "db.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tour de la Terreur</title>
    <meta name="description" content="Tour de la Terreur, disney, parc d'attraction">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    
<?php
if(isset($_POST["pseudo"]) and isset($_POST["password"])){
	$pseudo = htmlspecialchars($_POST["pseudo"]);
	$password = htmlspecialchars($_POST["password"]);

$request = $db->prepare("SELECT id, is_admin FROM members WHERE pseudo LIKE :pseudo AND password = :password");
$request->execute(
		array(
			"pseudo" => $pseudo,
			"password" => $password
			)
	);

$members = $request->fetchAll();
if(sizeof($members) > 0){
		$is_admin = $members[0]["is_admin"];
		$id_members = $members[0]["id"];
		$_SESSION["id_members"] = $id_members;
		$_SESSION["is_admin"] = $is_admin;
		header('Location: dashboard.php');  

	}

else {
	echo "Error : your pseudo/password is incorrect";
	}	
}
?>




<?php
include "footer.php"
?>
</body>

</html>
