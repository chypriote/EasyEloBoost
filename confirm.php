<?php	$pagename= 'Commande';
		include_once('includes/functions.php'); ?>
<?php	include_once('includes/header.php'); ?>
<?php	$bdd = mysql_connect('sql.mtxserv.fr', 'w_35770', 'ettasoeur42'); 
		mysql_select_db('35770_sql', $bdd); ?>
<?php	
	$requete='SELECT * FROM pl_noobs';
	$req = mysql_query($requete);
		echo $requete."<br /><br />";
	while ($data = mysql_fetch_assoc($req)) {
		echo $data['summoner']. " - ";
		echo $data['skype']. " - ";
		echo $data['mail']. " - ";
		echo $data['pass']. " - ";
		echo $data['comment']. "<br />";
	}		
?>


<?php	include_once('includes/footer.php'); ?>