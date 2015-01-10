<?php	$pagename= 'Commande';
		include_once('includes/functions.php'); ?>
<?php	include_once('includes/header.php'); ?>
<script type="text/javascript" src="js/order.js"></script>
<h1>Passer commande</h1>
<br />
<div id="testrecord"></div>
<div id="formulaire">
<form method=post name="orderform" id="orderform" onsubmit="return record()" action="https://www.paypal.com/cgi-bin/webscr">
Les commandes sont actuellement d&eacute;sactiv&eacute;es sur le site. Pour toute commande ou demande d'informations, veuillez nous contacter via la <a href="contact.php">page de contact</a> ou par skype (easy.eloboost).
<!--
<div class="order-top" style="display:block;">
<!-- Formulaire de commande -/->
<h2>Formulaire de commande</h2>
<?php if (isset($_POST['type']) && (!empty($_POST['type']))) {
	$type = $_POST['type']; 
	include("includes/form1.php");
} else { 
	include("includes/form2.php");
} ?>
</div>
<div id="order-bot" style="display:block;">
<hr />
<!-- Formulaire de contact -/->
<h2>Informations de contact</h2>
<div class="order_left">Nom d'invocateur :</div>
<div class="order_right"><input type=text name="summoner" id="summoner" /></div>
<div class="order_left">Pseudo Skype :</div>
<div class="order_right"><input type=text name="skype" id="skype" /></div>
<div class="order_left">Adresse email :</div>
<div class="order_right"><input type=text name="mail" id="mail" /></div>
<div class="order_left">Mot de passe* :</div>
<div class="order_right"><input type=password name="pass" id="pass" /></div>
<div class="order_left">Commentaires :</div><br />
<textarea name="infos" id="infos" rows="4"></textarea><br /><br />
<!-- Input nécessaires pour paiement Paypal -/->
<input type=hidden name="item_name" id="item_name" value="<?php if (isset($_POST['item_name'])) {echo $_POST['item_name'];} else {echo 'Easy Elo Boost';}?>">
<input type=hidden name="amount" id="amount" value="<?php if (isset($_POST['amount'])) {echo $_POST['amount'];} else {echo '20';}?>">
<input type=hidden name="business" value="eloboost.easy@gmail.com">
<input type=hidden name="currency_code" value="EUR">
<input type=hidden name="return" value="http://easy-boost.mtxserv.fr/dev/confirm.php">
<input type=hidden name="cmd" value="_xclick"><br />
<input type=hidden name="type" value="boost" />

<input type=image src="images/boutons/payer.png" value=submit style="float:right;margin-right:5%" />
</form>
</div>
<br><br><br>
Le serveur de messagerie n'est pas encore configur&eacute; à 100%, merci de nous contacter aussi par skype et/ou mail (via <a href="contact.php">cette page</a>)
<span style="float:right;font-size:0.7em;margin-bottom:-1%;margin-top:4%;">*Vous pouvez nous communiquer vos informations via skype si vous pr&eacute;f&eacute;rez</span>
-->
</div>
<div id="infos">
<h2>Informations sur votre commande</h2>
<div class="order_top">
<ul>
	<li>En commandant, vous acceptez nos <a href="TOS.php">Termes et Conditions</a></li>
	<li>Le payement se fait via Paypal</li>
	<li>Pour utiliser un autre moyen de paiement, <a href="contact.php">contactez nous</a></li>
	<li>Une fois le paiement effectué, vous serez redirig&eacute; vers une page vous permettant de </li>
	<li>Consultez notre <a href="FAQ.php">FAQ</a> pour toute question</li>
	<li>Vous pouvez aussi nous <a href="contact.php">contacter</a> pour plus d'informations</li>
</ul>
</div>
<div class="order_bot">
<hr />
<h2>Suivi de votre commande</h2>
<ul>
<li>Votre boost commence apr&egrave;s r&eacute;ception du paiment, des qu'un booster est disponible</li>
<li>Vous pouvez nous contacter &agrave; tout moment via skype pour:
	<ul>
		<li>Mettre en pause votre boost</li>
		<li>Commander un autre boost</li>
		<li>Toute autre remarque</li>
	</ul></li>
<li>Vous pouvez suivre la progression du boost via <a href="www.lolking.net">LoLKing</a></li>
<li>Ou regarder vos matchs directement en mode spectateur</li>
<li>Nous vous enverrons une capture d'&eacute;cran une fois le boost termin&eacute;</li>
</ul>
</div>
</div>
<br />
<br />
<?php include("includes/footer.php"); ?>