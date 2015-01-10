<?php	$pagename= 'Contact';
		include('includes/functions.php'); ?>
<?php	include('includes/header.php'); ?>
<br />
<h1>Contactez nous</h1>
<br />
<?php	// Si le formulaire a été envoyé, on inclut l'envoi de mail.
		// On met sent à true pour nettoyer les champs du formulaire
		if (!empty($_POST)) {include('includes/envoimail.php'); } else {$sent = true;}?>
<div id="form_contact">
<form method="post" action="contact.php#error_frame" name="contact_form" onsubmit="return verifrobot()">
	<h2>Envoyer un message</h2>
		Nom d'invocateur<br />
		<input type=text name="nom" value="<?php if (isset($sent) && !$sent) {echo $_POST['nom'];} ?>" /><br />
		Adresse mail<br />
		<input type=text name="mail" value="<?php if (isset($sent) && !$sent) {echo $_POST['mail'];} ?>" /><br />
		Sujet<br />
		<input type=text name="sujet" value="<?php if (isset($sent) && !$sent) {echo $_POST['sujet'];} ?>" /><br />
		Message<br />
		<textarea rows="10" name="message"><?php if (isset($sent) && !$sent) {echo $_POST['message'];} ?></textarea><br />
		Combien font 5 fois 10?<br />
		<input type=text name="verif" value="" /><br />
		<input type=checkbox name="mymail" disabled /><label for="mymail">M'envoyer une copie du message (désactivé)</label>
		<input type=submit value="Envoyer" />
</form>
<div style="float:right;font-size:10px;margin-top:5%;">
Tous les champs sont obligatoires.
</div>
</div>
<div id="right_contact">
	<br />
	Vous pouvez nous contacter en utilisant le formulaire ci-contre, ou bien en nous ajoutant directement sur skype:
	<h1>easy.eloboost</h1><br />
	<script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
<div id="SkypeButton_Chat_easy.eloboost_1">
  <script type="text/javascript">
    Skype.ui({
      "name": "chat",
      "element": "SkypeButton_Chat_easy.eloboost_1",
      "participants": ["easy.eloboost"],
      "imageColor": "white",
      "imageSize": 24
    });
  </script>
</div>
	<hr /><br />
	Nous nous effor&ccedil;ons de r&eacute;pondre aux messages dans les 24 heures suivant leur r&eacute;ception.
</div><br />
<?php //mail('nicolastem@hotmail.fr', 'Test', 'message de test coucou'); ?>
<br /><br /><br />
<?php include("includes/footer.php"); ?>