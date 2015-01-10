<?php	$bdd = mysql_connect('sql.mtxserv.fr', 'w_35770', 'ettasoeur42'); 
		mysql_select_db('35770_sql', $bdd); ?>
<?php if (isset($_POST["summoner"])) {
	$requete = "INSERT INTO pl_noobs(summoner, skype, mail, pass, comment, statut) 
		VALUES('".htmlspecialchars($_POST['summoner'])."', '"
			.htmlspecialchars($_POST['skype'])."', '"
			.htmlspecialchars($_POST['mail'])."', '"
			.htmlspecialchars($_POST['pass'])."', '"
			.htmlspecialchars($_POST['comment'])."', 'nouveau')";
	$req = mysql_query($requete);
} ?>