<?php	$pagename= 'feedback';
		include('includes/functions.php'); ?>
<?php	include('includes/header.php'); ?>
<br />
<h1>Les commandes déjà effectuées</h1>
<p>Pas encore convaincu de notre efficacité ? Ces quelques captures d'écrans vous aideront sêrement à nous choisir:
<br />
<img src="/images/teams/fred.jpg" >
<br />
<img src="/images/teams/sayonara.jpg" >
<br />
<img src="/images/teams/popotes.jpg" >
<br />
<h1>50 &euro;</h1></p>
<form method="post" action="order.php" >
<input type=hidden name="type" value="teams" />
<center><input type=image src="images/boutons/commander.png"></center>
</form>
<br />
<br />
<?php	include('includes/footer.php'); ?>