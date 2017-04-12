<?php
include('session.php');
include('../connexion.php');
$req_field = mysqli_query($id_connect,"SELECT * FROM ours_event");
$field_event = mysqli_fetch_assoc($req_field);
var_dump($field_event);
if (isset($_POST['event_text'])) {
	$_POST = array_map('trim', $_POST);

	if (!get_magic_quotes_gpc()) {
		$_POST = array_map('addslashes', $_POST);
	}

	$safe_text    = mysqli_real_escape_string($id_connect,$_POST['event_text']);
	$update_event  = mysqli_query($id_connect,"UPDATE ours_event SET
										text='".$safe_text."',color='".$_POST['event_color']."'");

	if ($update_event) {

		$msg = 'La base de données a été mise à jour';
		header('location: index.php?update=ok');

	} else {

		$msg = 'La mise à jour a échoué, veuillez réessayer plus tard';

	}
}


?><!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Café des ours - Administrateur</title>

		<!-- Bootstrap Core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- MetisMenu CSS -->
		<link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="dist/css/sb-admin-2.css" rel="stylesheet">

		<!-- Morris Charts CSS -->
		<link href="vendor/morrisjs/morris.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
		<script src="ckeditor/ckeditor.js"></script>
		<script >
			CKEDITOR.config.allowedContent = true; // Empêche CK d'enlever les classes ajoutées manuellement
			CKEDITOR.config.contentsCss = [ '../css/style.css' ];
			CKEDITOR.config.width = '100%;';
			CKEDITOR.config.autoParagraph = false;
			CKEDITOR.stylesSet.add( 'default', [
				// Block Styles
				{ name : 'Brun', element : 'span', attributes : { 'class' : dark-brown}},
				{ name : 'Texte général', element : 'p', attributes : { 'class' : white}}


			] );
		</script>
	</head>

	<body>

		<div id="wrapper">

			<?php include('nav.php'); ?>

			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Accueil > événement</h1>
					</div>
				</div>
				<form action="" method="post" id="event" class="col-lg-12 ">
					<div class="form-group col-md-6 col-md-offset-3">
						<label for="surname-input" class="col-form-label">Texte de l'événement</label>
						<textarea class="form-control" type="text" name="event_text" value="" id="event_text"><?php echo $field_event['text'];?></textarea>
					</div>
					<div class="form-group col-md-7 col-md-offset-3">
						<label class="col-form-label">Image <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""></label>
						<label class="col-form-label">Couleur <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"></label>
					</div>
					<div class="form-group col-md-7 col-md-offset-3">
						<div id="option1checked">
							<label class="col-sm-12 col-form-label">Couleur de l'arrière plan : <input type="color" name="event_color" id="event_color" value="<?php echo $_POST['event_color'];?>"></label>
						</div>
						<div id="option2checked">

						</div>
					</div>
					<div class="col-md-7 col-md-offset-3">
						<button type="submit" id="subButton" class="btn btn-default mt-md">Valider les modifications</button>
					</div>
					<div class="col-md-7 col-md-offset-3"><?php echo $msg;?></div>
				</form>
			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- /#wrapper -->

		<!-- Ckreplace -->
		<script type="text/javascript">CKEDITOR.replace( 'event_text' );</script>
		<!-- jQuery -->
		<script src="vendor/jquery/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

		<!-- Metis Menu Plugin JavaScript -->
		<script src="vendor/metisMenu/metisMenu.min.js"></script>

		<!-- Morris Charts JavaScript -->
		<script src="vendor/raphael/raphael.min.js"></script>
		<script src="vendor/morrisjs/morris.min.js"></script>
		<script src="data/morris-data.js"></script>

		<!-- Custom Theme JavaScript -->
		<script src="dist/js/sb-admin-2.js"></script>

	</body>

</html>
