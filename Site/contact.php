<?php include('mail.php') ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<link rel="stylesheet" href="css/bootstrap-grid.css">
		<link rel="stylesheet" href="css/bootstrap-reboot.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,800" rel="stylesheet">
	</head>

	<body>
		<?php include('nav.php') ?>

		<div class="container">
			<div class="line"></div>
			<h3 class="tac">Venez à notre rencontre</h3>
			<div class="row">
				<div class="col-4" id="map">
					<h2>Besoin d'aide pour trouver la boutique ?</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1711.3225027542114!2d4.3592176955172395!3d43.8332335441711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b42d08f35e8e03%3A0x926b18ac43a1c009!2s3+Rue+de+la+R%C3%A9publique%2C+30900+N%C3%AEmes!5e0!3m2!1sfr!2sfr!4v1491904930163" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
					<div>Vous pouvez nous rejoindre en utilisant les lignes 2, 3, 4, 5, 6, 7, 9, 10, 51, et 61
						<br>En descendant à l'arrêt <strong>Esplanade Feuchères</strong></div>
				</div>
				<form class="col-8" action="" method="post" onsubmit="return check(this)">
				<?php
						if($sent){
							echo '<h2>'.$reponsemail.'</h2>';
						}
						else {?>
					<h2>Besoin d'un renseignement ? <br>Contactez-nous !</h2>
					<div class="row justify-content-center">
						<div class="form-group col-md-4">
							<label for="name" class=" col-form-label">Nom</label>
							<input class="form-control" type="text" name="name" value="" id="name"  onblur="check(this)" >
						</div>
						<div class="form-group col-md-4">
							<label for="surname-input" class="col-form-label">Prenom</label>
							<input class="form-control" type="text" name="surname" value="" id="surname"  onblur="check(this)" >
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="form-group col-md-4">
							<label for="email-input" class="col-form-label">Email</label>
							<input class="form-control" type="email" name="mail" value="" id="mail" onblur="check(this)">
						</div>
						<div class="form-group col-md-4">
							<label for="tel" class=" col-form-label">Telephone</label>
							<input class="form-control" type="tel" name="tel" value="" id="tel"  onblur="check(this)" >
						</div>
					</div>
					<div class="form-group row justify-content-center">
						<div class="col-md-8 tac">
							<label for="msg" class="db tal col-form-label">Message</label>
							<textarea class="vam form-control" name="msg" id="msg" onblur="check(this)"></textarea>
							<button type="submit" id="subButton" class="btn btn-default mt-md cta tac">Envoyer &#8594;</button>
							<div class="red mt-md"><?php echo $reponsemail ?></div>
							<div class="red mt-md"><?php echo $messagejava ?></div>
						</div>
					</div>

				<?php } ?>
				</form>
			</div>
		</div>
		<?php include('footer.php') ?>
		<script src="js/formCheck.js"></script>
	</body>
</html>
