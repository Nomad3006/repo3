<?php
$host='127.0.0.1';
$login='root';
$password='';
$db_name='ours';


$id_connect=mysqli_connect($host,$login,$password) or die ('Le site est indisponnible pour le moment, réessayer.');


mysqli_select_db($id_connect,$db_name)or die ('la base n\'existe pas');
mysqli_query($id_connect,"SET NAMES 'utf8'");

?>
