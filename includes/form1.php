<div class="order_left">Type de commande :</div>
<div class="order_right"><?php echo get_type($type); ?></div>
<?php if ($type == 'boost') { ?>
<div class="order_left">Division initiale :</div>
<div class="order_right"><?php echo get_league($_POST['eloboost-league-old'], $_POST['eloboost-division-old']); ?><br/></div>
<div class="order_left">Division finale :</div>
<div class="order_right"><?php echo get_league($_POST['eloboost-league-new'], $_POST['eloboost-division-new']); ?><br /></div>
<br /><br />
<div class="order_left">Prix :</div>
<div class="order_right"><span style="font-size:1.3em;"><?php echo $_POST['amount']; ?> &euro;</span></div>

<?php } else if ($type == 'wins') { ?>
<div class="order_left">Division :</div>
<div class="order_right"><?php echo get_league($_POST['eloboost-league'], $_POST['eloboost-division']); ?><br/></div>
<div class="order_left">Nombre de victoires :</div>
<div class="order_right"><?php echo $_POST['eloboost-wins']; ?><br /></div>
<br /><br />
<div class="order_left">Prix :</div>
<div class="order_right"><span style="font-size:1.3em;"><?php echo $_POST['amount']; ?> &euro;</span></div>

<?php } else if ($type == 'placement') { ?>
<br />
<div class="order_left">Prix :</div>
<div class="order_right" id="prix-place"><span style="font-size:1.3em;">50 &euro;</span></div>

<?php } ?>
<br /><br />