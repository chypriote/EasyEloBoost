<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8" />
		<meta name="description" content="Elo Boost et Coaching pour League of Legends &agrave; bas prix. L'endroit r&eacute;v&eacute; pour s'am&eacute;liorer sur League of Legends." />
		<link rel="stylesheet" href="css/style.css" />
		<link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
		<script type="text/javascript" src="js/slider.js"></script>
		<script type="text/javascript" src="js/verifrobot.js"></script>
		<?php	$bdd = mysql_connect('server', 'user', 'pass'); 
			mysql_select_db('easyelobsql', $bdd); ?>
		<title>Easy Elo Boost - <?php echo $pagename; ?></title>
	</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<a href="index.php"><img src="images/logo.png"  alt="Easy Elo Boost" /></a>
		<hr />
		</div>
		<div id="menu">	
			<ul>
				<li<?php link_isactive('accueil', $pagename); ?>><a href="index.php" >Accueil</a></li>
				<li<?php link_isactive('boosts', $pagename); ?>><a href="boosting.php">ELO BOOSTS</a></li>
				<li<?php link_isactive('victoires', $pagename); ?>><a href="victoires.php">Victoires</a></li>
				<li<?php link_isactive('coaching', $pagename); ?>><a href="coaching.php">coaching</a></li>
				<li<?php link_isactive('commande', $pagename); ?>><a href="order.php">Commande</a></li>
				<li<?php link_isactive('contact', $pagename); ?>><a href="contact.php">contacT</a></li>
				<li<?php link_isactive('feedback', $pagename); ?>><a href="feedback.php">Feedback</a></li>
<?php if (isset($_SESSION['user'])) {echo '<li><a href="logout.php">logout</a></li>'; } ?>
			</ul>
		</div>
<!--			<a href="en/index.php"><img src="/images/icoru.png" style="float: right; margin-top:15px;" ></a> -->
	<hr />
	</div>
	<div id="content">
