<?php	$pagename= 'Logout';
		include('includes/functions.php'); ?>
<?php	include('includes/header.php'); ?>
<?php $_SESSION['user'] = null; ?>
	<br />
<h4>Vous &egrave;tes maintenant d&eacute;connect&eacute;</h4>
<br />
<?php	include('includes/footer.php'); ?>