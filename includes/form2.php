<body onload="cleanform()">
<div class="order_left">Type de commande :</div>
<div class="order_right">
	<select name="type" id="type" onchange="changeform()">
		<option value=""> </option>
		<option value="boost">Elo Boost</option>
		<option value="wins">Achat de victoires</option>
		<option value="placement">Matchs de placement</option>
	</select>
<br />
</div>
<br /><br />
<div id="hidden">
<div id="hidden-boost" style="display:none">
	<div class="order_left">Division initiale :</div>
	<div class="order_right">
		<select name="eloboost-league-old" id="eloboost-league-old">
			<option value="bronz">Bronze</option>
			<option value="silv">Argent</option>
			<option value="gold">Or</option>
			<option value="plat">Platine</option>
		</select>
		<select name="eloboost-division-old" id="eloboost-division-old">
			<option value="5">Division V</option>
			<option value="4">Division IV</option>
			<option value="3">Division III</option>
			<option value="2">Division II</option>
			<option value="1">Division I</option>
		</select>
	<br/>
	</div>
	<div class="order_left">Division finale :</div>
	<div class="order_right">
		<select name="eloboost-league-new" id="eloboost-league-new" onchange="checktier()">
			<option value="bronz">Bronze</option>
			<option value="silv">Argent</option>
			<option value="gold">Or</option>
			<option value="plat">Platine</option>
			<option value="diam">Diamant</option>
		</select>
		<select name="eloboost-division-new" id="eloboost-division-new">
			<option value="5">Division V</option>
			<option value="4">Division IV</option>
			<option value="3">Division III</option>
			<option value="2">Division II</option>
			<option value="1">Division I</option>
		</select>
	<br />
	</div>
	<div class="order_left">LP/victoire :</div>
	<div class="order_right">
		<select name="eloboost-lp-old" id="eloboost-lp-old">
			<option value="1">15-30</option>
			<option value="0">0-15</option>
		</select>
	</div>
<br /><br />
<div class="order_left">Prix :</div>
<div class="order_right" id="prix-boost"><span style="font-size:1.3em;"> &euro;</span></div>
<br />
<a href="javascript:calculate_price_boost()"><img style="width:20%;float:right;margin-right:5%" src="images/boutons/calculer.png" value="Calculer" /></a>
</div>



<div id="hidden-wins" style="display:none">
<div class="order_left">Division :</div>
<div class="order_right">
	<select name="wins-league" id="wins-league">
		<option value="bronz">Bronze</option>
		<option value="silv">Argent</option>
		<option value="gold">Or</option>
		<option value="plat">Platine</option>
	</select>
	<select name="wins-divisions" id="wins-division">
		<option value="4">Division V</option>
		<option value="3">Division IV</option>
		<option value="2">Division III</option>
		<option value="1">Division II</option>
		<option value="0">Division I</option>
	</select>
<br/></div>
<div class="order_left">Nombre de victoires :</div>
<div class="order_right"><input type=text name="wins-wins" id="wins-wins" style="width:10%" /><br /></div>
<br /><br />
<div class="order_left">Prix :</div>
<div class="order_right" id="prix-wins"><span style="font-size:1.3em;"> &euro;</span></div>
<br />
<a href="javascript:calculate_price_victory()"><img style="width:20%;float:right;margin-right:5%" src="images/boutons/calculer.png" value="Calculer" /></a>

</div>

<div id="hidden-placement" style="display:none">

<div class="order_left">Prix : </div>
<div class="order_right" id="prix-place"><span style="font-size:1.3em;">50 &euro;</span></div>
</div>

</div>
<br />