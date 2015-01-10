<?php	$pagename= 'Victoires';
		include('includes/functions.php'); ?>
<?php	include('includes/header.php'); ?>
<script type="text/javascript" src="js/victory.js"></script>
<br />
<h1>Achat de victoires</h1>
<div id="select_boost">
<form name="elocalc" action="order.php" method="post">
		<img src="images/diam.png" alt="League" id="tier-img" onload="gettier()"/>
		<div class="title">Choisissez votre league, votre division, et le nombre de victoires que vous souhaitez acheter :</div>
		<div id="eloboost-error"></div>
		<label for="eloboost-league">League:</label>
		<select name="eloboost-league" id="eloboost-league" onchange="gettier()">
			<option value="bronz">Bronze</option>
			<option value="silv">Argent</option>
			<option value="gold">Or</option>
			<option value="plat">Platine</option>
		</select>
		<label for="eloboost-division">Division:</label>
		<select name="eloboost-division" id="eloboost-division">
			<option value="4">Division V</option>
			<option value="3">Division IV</option>
			<option value="2">Division III</option>
			<option value="1">Division II</option>
			<option value="0">Division I</option>
		</select>
		<label for="eloboost-wins">Nombre de victoires:</label>
		<input type="text" id="eloboost-wins" maxlength="3" name="eloboost-wins" value="10" />
		<br />
		<div id="prix">
			<h3>Prix Total:</h3>
			<a href="javascript:calc_victory()"><img src="images/boutons/calculer.png" alt="Calculer" /></a>
		</div>
<input type="hidden" name="business" value="eloboost.easy@gmail.com">
<input type="hidden" name="item_name" id="item_name" value="Easy Elo Boost - Victoires">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="amount" id="amount" value="30">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="type" value="wins">
</form>
</div>
<br />
<br />
<?php include("includes/footer.php"); ?>