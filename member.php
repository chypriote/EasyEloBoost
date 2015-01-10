<?php	$pagename= 'Espace Membre';
		include('includes/functions.php'); ?>
<?php	include('includes/header.php'); 
	include("includes/login.php"); ?>
	<br />
<h4>Espace membre</h4>
<br />
<?php if (!isset($_SESSION['user'])) { ?>
<div id="login_box">
<?php if ($error == 'user' || $error == 'pass') { ?><br /><span style="color:red">
<?php if ($value == 'user') {echo'Nom d\'utilisateur';} else if ($error == 'pass') {echo'Mot de passe';} ?>incorrect</span>
<?php } ?>
<form method="post" action="member.php" name="login">
<h3>Nom d'utilisateur:</h3>
<input type=text id="user" name="user" />
<h3>Mot de passe</h3>
<input type=password id="pass" name="pass" />
<br /><br />
<span style="margin-left:50%"><input type=submit value="Connexion" /></span>
</form>
<br />
</div>
<br />
Pas encore de compte ?
<br />
Faites une demande &agrave; l'administrateur via skype.
<br />
<br />
<?php } else { ?>

<?php echo "coucou"; ?>

<?php } ?>

<?php	include('includes/footer.php'); ?>