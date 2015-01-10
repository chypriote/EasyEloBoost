<?php	$sent =false;
	// Vérification robot
	if (!verif_robot($_POST['verif'])) { ?>
	<div id="error_frame">
		Erreur: la r&eacute;ponse &agrave; la question anti-robot est incorrecte.
	</div>
<?php	} else { 
	// Vérification coté serveur que les champs sont remplis
			if (empty($_POST['nom']) || empty($_POST['sujet']) || empty($_POST['message']) || empty($_POST['mail'])) { ?>
	<div id="error_frame">
		Erreur: vous devez remplir tous les champs du formulaire.
	</div>	
<?php		} else {
	//*********************************//
	//**********Envoi du mail**********//
	//*********************************//
	
				$sujet='Message de ' . $_POST['nom'] . ': ' .$_POST['sujet'];
				$message=$_POST['message'] . "<br />Adresse de contact:" . $_POST['mail'];
				$sent=mail('contact@easyeloboost.com', $sujet, $message);
	//*********Copie du mail***********//
				if ($_POST['mymail']) {
					$mail=$_POST['mymail'];
					$sujet= $_POST['sujet'];
					$message="Ce message est une copie du message envoyé à Easy Elo Boost.<br /><br />" .$_POST['message'];
					//$sent=mail($mail, $sujet, $message);
				}
	// Si pas d'erreur, on affiche une confirmation
				if ($sent) { ?>
	<div id="error_frame">
		Votre message a bien &eacute;t&eacute; envoy&eacute; !
	</div>
<?php 			} else { 
	// Sinon, message d'erreur ?>
	<div id="error_frame">
		Le serveur a rencontr&eacute; une erreur inconnue lors de l'envoi de votre message.
	</div>
<?php			}
			}
	} ?>	