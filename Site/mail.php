<?php

$regName = ('#^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ][a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ \'-]{1,50}$#');
$regEmail = ('#^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,}$#');
$regTel=('#^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$#');
$messagejava='';
$reponsemail='';
$sent=0;

if(isset($_POST['name'])){
	$_POST=array_map('trim',$_POST);
	$_POST=array_map('htmlspecialchars',$_POST);

	if(!preg_match($regName,$_POST['name'])
	   ||!preg_match($regName,$_POST['surname'])
	   ||!preg_match($regEmail,$_POST['mail'])
	   ||!preg_match($regTel,$_POST['tel'])
	   ||!strlen($_POST['mseg'])){

		$messagejava='<p>Merci de réactiver votre javascript</p>';}

	else{


		$headers='From: palamara.thomas@gmail.com' . "\r\n";
		$headers.='Reply-To: '.$_POST['mail'] . "\r\n";
		$headers.='Mime-Version: 1.0 ' . "\r\n";
		$headers.='Content-type: text/html; charset="UTF-8"' . "\r\n";


		$headers2='From:' .$_POST['mail'] . "\r\n";
		$headers2.='Reply-To: no-reply@gmail.com' . "\r\n";
		$headers2.='Mime-Version: 1.0 ' . "\r\n";
		$headers2.='Content-type: text/html; charset="UTF-8"' . "\r\n";

		$maildest='palamara.thomas@gmail.com';
		$sujetdest='Vous avez un mail de votre page contact Cv';
		$mailmessdest='
			Salut, Toma <br>
			Tu as recu un message de ta page contact.
			'. $_POST['nom'].' veux te contacter <br>
			Voici son mail : '.$_POST['mail'].' <br>
			Son message:  '.$_POST['message'];

		$maildest2=  $_POST['mail'];
		$sujetdest2='accusé de réception';
		$mailmessdest2='
			Bonjour,'.$_POST['name'].'
			Nous avons pris en compte votre mail, nous ferons en sorte de vous répondre aussi vite que possible. <br>
			Voici le message que vous m\'avez transmis lors de votre saisie: <br>
			Ainsi que votre message : '.$_POST['message'].' <br>
			Voici le mail sur lequel nous allons vous répondre <br> <b>'.$_POST['mail'].'<br>
			Nous vous remercions de l\'attention que vous nous portez. <br>
			Cordialement, <br>
			Palamara Thomas.';

		if((mail($maildest,$sujetdest,$mailmessdest,$headers))&& (mail($maildest2,$sujetdest2,$mailmessdest2,$headers2))){
			$reponsemail='Félicitation mail envoyé avec succès.';
			$sent=1;
			echo $sent;
		}
		else{$reponsemail='Une erreur est survenue lors de l\'envoi de votre message veuillez réessayer ultérieurement.';
			$sent=1;
			 echo $sent;
			}



	}

}
?>
