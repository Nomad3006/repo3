<?php
include('session.php');
include('../connexion.php');

if (isset($_POST['title1'])) {
    $_POST = array_map('trim', $_POST);

    if (!get_magic_quotes_gpc()) {
        $_POST = array_map('addslashes', $_POST);
    }

	$safe_title1    = mysqli_real_escape_string($id_connect,$_POST['title1']);
	$safe_title2    = mysqli_real_escape_string($id_connect,$_POST['title2']);
	$safe_text1     = mysqli_real_escape_string($id_connect,$_POST['text1']);
	$safe_text2     = mysqli_real_escape_string($id_connect,$_POST['text2']);
	$safe_textlink1 = mysqli_real_escape_string($id_connect,$_POST['textlink1']);
	$safe_textlink2 = mysqli_real_escape_string($id_connect,$_POST['textlink2']);
	$safe_link1     = mysqli_real_escape_string($id_connect,$_POST['link1']);
	$safe_link2     = mysqli_real_escape_string($id_connect,$_POST['link2']);
	$update_event1  = mysqli_query($id_connect,"UPDATE seedlife_event SET
										title='".$safe_title1."',
										text='".$safe_text1."',
                                        link_text='".$safe_textlink1."',
										link='".$safe_link1."'
	WHERE id=1");

	$update_event2  = mysqli_query($id_connect,"UPDATE seedlife_event SET
										title='".$safe_title2."',
										text='".$safe_text2."',
                                        link_text='".$safe_textlink2."',
										link='".$safe_link2."'
	WHERE id=2");

	if ($update_event1 && $update_event2) {

        $msg = 'La base de données a été mise à jour';

    } else {

        $msg = 'La mise à jour a échoué, veuillez réessayer plus tard';

    }
}

?>
<html lang="fr">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<link rel="stylesheet" href="../css/bootstrap-grid.css">
		<link rel="stylesheet" href="../css/bootstrap-reboot.css">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,800" rel="stylesheet">
	</head>

	<body>
		<nav id="admin-nav" class="pt-md">
			<div class="container">
				<a href="modification.php" id="brand"><img src="../img/brand.png" alt="logo seed life"></a>
				<div class="containerBurger">
					<input id="click" name="exit" type="checkbox" onclick="handleBurger(this);"/>
					<label for="click"><span class="burger"></span><span class="menu">Menu</span></label>
				</div>
				<div class="dib vam ml-md">Choisissez la page à modifier :</div>
				<ul id="links" class="vam">
					<li><a href="modification.php?page=accueil" class="active">Page accueil</a></li>
					<li><a href="modification.php?page=mission">Page mission</a></li>
					<li><a href="modification.php?page=acteurs">Page acteurs</a></li>
					<li><a href="modification.php?page=constats">Page constats</a></li>
					<li><a href="modification.php?page=actions">Page actions</a></li>
					<li><a href="modification.php?page=contact">Page contact</a></li>
				</ul>
			</div>
		</nav>
		<h4> <?php echo $msg; ?> </h4>
		<?php
		if(isset($_GET['page'])){
			if($_GET['page']=='accueil'){
			$req_field = mysqli_query($id_connect,"SELECT * FROM seedlife_event where id=1");
			$field_event1 = mysqli_fetch_assoc($req_field);
			$req_field = mysqli_query($id_connect,"SELECT * FROM seedlife_event where id=2");
			$field_event2 = mysqli_fetch_assoc($req_field);
			$req_field = mysqli_query($id_connect,"SELECT * FROM seedlife_event where id=3");
			$field_event3 = mysqli_fetch_assoc($req_field);
		?>

		<form id="event-form" class="container" action="modification.php" method="post">
			<fieldset class="mb-md">
			<h3>Evenement 1</h3>
				<label for="" class=" col-form-label">Afficher cet évènement :
					<input class="form-control event-display" type="checkbox" name="display1" <?php if($field_event1['display']){echo 'checked';}else{echo '';} ?>>
				</label>

				<label for="" class=" col-form-label">Titre de l'évènement (140 caratères maximum)
					<textarea class="form-control event-title" name="title1"><?php echo stripcslashes($field_event1['title']); ?></textarea>
				</label>

				<label for="" class=" col-form-label">Texte de l'évènement
					<textarea class="form-control event-title" name="text1"><?php echo stripcslashes($field_event1['text']); ?></textarea>
				</label>

				<label for="" class=" col-form-label">URL du lien (Ne pas remplir pour ne rien afficher)
					<textarea class="form-control event-title" name="textlink1"><?php echo stripcslashes($field_event1['link']); ?></textarea>
				</label>

				<label for="" class=" col-form-label">Texte du lien (Ne pas remplir pour ne rien afficher)
					<textarea class="form-control event-title" name="textlink1"><?php echo stripcslashes($field_event1['link_text']); ?></textarea>
				</label>
			</fieldset>

			<fieldset class="mb-md">
			<h3>Evenement 2</h3>
				<label for="" class=" col-form-label">Afficher cet évènement :
					<input class="form-control event-display" type="checkbox" name="display2" <?php if($field_event2['display']){echo 'checked';}else{echo'';} ?>>
				</label>

				<label for="" class=" col-form-label">Titre de l'évènement (140 caratères maximum)
					<textarea class="form-control event-title" name="title2"><?php echo stripcslashes($field_event2['title']); ?></textarea>
				</label>

				<label for="" class=" col-form-label">Texte de l'évènement
					<textarea class="form-control event-title" name="text2"><?php echo stripcslashes($field_event2['text']); ?></textarea>
				</label>

				<label for="" class=" col-form-label">URL du lien (Ne pas remplir pour ne rien afficher)
					<textarea class="form-control event-title" name="link2"><?php echo stripcslashes($field_event2['link']); ?></textarea>
				</label>

				<label for="" class=" col-form-label">Texte du lien (Ne pas remplir pour ne rien afficher)
					<textarea class="form-control event-title" name="textlink2"><?php echo stripcslashes($field_event2['link_text']); ?></textarea>
				</label>
			</fieldset>
			<button type="submit" id="subButton" class="btn btn-default mt-md">Valider les modifications</button>
		</form>

		<?php
			}
		}
		?>
		<script src="text/javascript">CKEDITOR.replace( 'editor1' );</script>
	</body>
</html>
