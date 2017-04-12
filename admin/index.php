<?php
session_start();
include('../connexion.php');
$msg="";
if(isset($_POST['login'])){

	if(!empty($_POST['login']) && !empty($_POST['password'])){
		$_POST = array_map('htmlspecialchars',$_POST);
		$_POST = array_map('trim',$_POST);
		$safe_login=mysqli_real_escape_string($id_connect,$_POST['login']);
		$safe_password=mysqli_real_escape_string($id_connect,$_POST['password']);
		$q_logs=mysqli_query($id_connect,"SELECT login, password FROM seedlife_admin WHERE login='".$safe_login."' && password='".sha1($safe_password)."'");
		if(mysqli_num_rows($q_logs) == 0){
			$msg='Identifiant ou mot de passe incorrects';
		}
		else{
			echo 'ok';
			$_SESSION['login']='';
			header('location: modification.php');
		}
	}
	else{
		$msg='Veuillez remplir les champs Identifiant et Mot de passe';
	}
}


?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<link rel="stylesheet" href="../css/bootstrap-grid.css">
		<link rel="stylesheet" href="../css/bootstrap-reboot.css">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,800" rel="stylesheet">
	</head>

	<body class="pt-lg">
		<div class="tac container">
			<img src="../img/brand.png" alt="">
			<form id="login-form" action="index.php" method="post">
				<label for="name-input" class=" col-form-label">Identifiant</label>
				<input class="form-control" type="text" name="login" value="" id="login"  onblur="check(this)" >

				<label for="password" class=" col-form-label">Mot de passe</label>
				<input class="form-control" type="password" name="password" value="" id="password"  onblur="check(this)" >
				<button type="submit" id="subButton" class="btn btn-default mt-md">Se connecter</button>
			</form>
			<div><?php echo $msg; ?></div>
		</div>



	</body>

</html>
