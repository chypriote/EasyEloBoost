<?php	$pagename= 'Boosts';
		include('includes/functions.php'); ?>
<?php	include('includes/header.php'); ?>
<script type="text/javascript" src="js/eloboost.js"></script>
<br />
<h1>Passage en division sup&eacute;rieure</h1>
<body onload="gettier_new();gettier_old()">
<?php //https://www.paypal.com/cgi-bin/webscr ?>
<form name="elocalc" action="order.php" method="post">
	<div class="boost_bloc">
	<h2>Division actuelle</h2>
	<table>
		<tr><td>League</td>
			<td>Division</td>
			<td>LP/victoire</td>
		</tr>
		<tr>
		<td><select name="eloboost-league-old" id="eloboost-league-old" onchange="gettier_old()">
				<option value="bronz">Bronze</option>
				<option value="silv">Argent</option>
				<option value="gold">Or</option>
				<option value="plat">Platine</option>
			</select>
		</td>
		<td><select name="eloboost-division-old" id="eloboost-division-old" onchange="gettier_old()">
				<option value="5">Division V</option>
				<option value="4">Division IV</option>
				<option value="3">Division III</option>
				<option value="2">Division II</option>
				<option value="1">Division I</option>
			</select>
		</td>
		<td><select name="eloboost-lp-old" id="eloboost-lp-old" onchange="gettier_old()">
				<option value="1">15-30</option>
				<option value="0">0-15</option>
			</select>
		</td>
		</tr>
	</table>
	<img src="images/unranked.png" alt="League" id="tier-img-old" onload="gettier_old()" />
	</div>
	<div class="boost_bloc">
	<h2>Division voulue</h2>
	<table>
		<tr><td>League</td>
			<td>Division</td>
		</tr>
		<tr>
		<td><select name="eloboost-league-new" id="eloboost-league-new" onchange="gettier_new(), checktier()">
				<option value="bronz">Bronze</option>
				<option value="silv">Argent</option>
				<option value="gold">Or</option>
				<option value="plat">Platine</option>
				<option value="diam">Diamant</option>
			</select>
		</td>
		<td><select name="eloboost-division-new" id="eloboost-division-new" onchange="gettier_new()">
				<option value="5">Division V</option>
				<option value="4">Division IV</option>
				<option value="3">Division III</option>
				<option value="2">Division II</option>
				<option value="1">Division I</option>
			</select>
		</td>
		</tr>
	</table>
	<img src="images/unranked.png" alt="League" id="tier-img-new" onload="gettier_new()" />
	</div>

	<div id="boost_prix">
		<h3>Prix Total:</h3><br/>
		<a href="javascript:getprice_boost()"><img src="images/boutons/calculer.png" id="calculate" /></a>
	</div>
<input type=hidden name="item_name" id="item_name" value="Easy Elo Boost - Victoires">
<input type=hidden name="currency_code" value="EUR">
<input type=hidden name="amount" id="amount" value="30">
<input type=hidden name="type" value="boost" />
	</form>
<br />
<?php include("includes/footer.php"); ?>