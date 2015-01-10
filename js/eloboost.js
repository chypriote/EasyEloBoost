function	checktier() {
	var tier = document.getElementById('eloboost-league-new');
	var list = document.getElementById('eloboost-division-new');
	if (tier.value != 'diam') {
		list.innerHTML='<option value="5">Division V</option><option value="4">Division IV</option><option value="3">Division III</option><option value="2">Division II</option><option value="1">Division I</option>';
	} else {
		list.innerHTML='<option value="5">Division V</option>'
	}
}

function	gettier_old() {
	var img = document.getElementById('tier-img-old');
	var league = document.getElementById('eloboost-league-old').value;
	
	if (league == 'bronz') {img.src = 'images/bronz.png';}
	if (league == 'silv') {img.src = 'images/silv.png';}
	if (league == 'gold') {img.src = 'images/gold.png';}
	if (league == 'plat') {img.src = 'images/plat.png';}
}
function	gettier_new() {
	var img = document.getElementById('tier-img-new');
	var league = document.getElementById('eloboost-league-new').value;
	
	if (league == 'bronz') {img.src = 'images/bronz.png';}
	if (league == 'silv') {img.src = 'images/silv.png';}
	if (league == 'gold') {img.src = 'images/gold.png';}
	if (league == 'plat') {img.src = 'images/plat.png';}
	if (league == 'diam') {img.src = 'images/diam.png';}
}
function	leaguenumber(league) {
	if (league == 'bronz') {return 0;}
	if (league == 'silv') {return 1;}
	if (league == 'gold') {return 2;}
	if (league == 'plat') {return 3;}
	if (league == 'diam') {return 4;}
}
var pack_price = [ /* Packs	*/
		45, /* Bronze	*/
		85, /* Argent	*/
		140, /* Gold	*/
		215, /* Platine */
	];
var boost_price = [		
	[ /* Bronze	*/
		10, /* Division 5	*/
		10, /* Division 4	*/
		10, /* Division 3	*/
		10, /* Division 2 */
		15 /* Division 1 ->silver 5*/
	],				
	[ /* Silver	*/
		15, /* Division 5	*/
		15, /* Division 4	*/
		15, /* Division 3	*/
		15, /* Division 2	*/
		25 /* Division 1	*/
	],				
	[ /* Gold */
		25, /* Division 5	*/
		25, /* Division 4	*/
		25, /* Division 3	*/
		25, /* Division 2	*/
		50 /* Division 1	*/
	],				
	[ /* Platinum */
		45, /* Division 5	*/
		45, /* Division 4 */
		45, /* Division 3 */
		45, /* Division 2 */
		80 /* Division 1	*/
	]
];

function	get_str_boost(league_old, div_old, league_new, div_new) {
	var str = 'Easy Elo Boost - Elo Boost: ';

	if (league_old == 'bronz')
		str += 'Bronze '
	else if (league_old == 'silv')
		str += 'Argent '
	else if (league_old == 'gold')
		str += 'Or '
	str += div_old + ' - ';
	if (league_new == 'bronz')
		str += 'Bronze '
	else if (league_new == 'silv')
		str += 'Argent '
	else if (league_new == 'gold')
		str += 'Or '
	else if (league_new == 'plat')
		str += 'Platine '
	str += div_new;
	return str;
}

function	getprice_boost() {
	var elem = document.getElementById('boost_prix');
	var league_old = document.getElementById('eloboost-league-old').value;
	var div_old = document.getElementById('eloboost-division-old').value;
	var lp_old = document.getElementById('eloboost-lp-old').value;
	var league_new = document.getElementById('eloboost-league-new').value;
	var div_new = document.getElementById('eloboost-division-new').value;
	var price = 0;
	var str = get_str_boost(league_old,  div_old, league_new, div_new);

	// On vérifie que la demande est valide
if (leaguenumber(league_old)  > leaguenumber(league_new)) { //Ancienne league > Nouvelle
	elem.innerHTML = '<h3>Prix Total: Choix invalide</h3><br /><a href="javascript:getprice_boost()"><img src="images/boutons/calculer.png" id="calculate" onclick="getprice_boost()" /></a>';
} else {
if ((league_old == league_new) && (div_old <= div_new)) { //Même league, nouvelle division < ancienne
	elem.innerHTML = '<h3>Prix Total: Choix invalide</h3><br /><a href="javascript:getprice_boost()"><img src="images/boutons/calculer.png" id="calculate" onclick="getprice_boost()" /></a>';		
} else {
// Si tout est bon, on calcule le prix
	if (lp_old == 0) {price = price + parseInt(boost_price[leaguenumber(league_old)][5 - div_old]) + 1;}
	if (league_old == league_new) {// Boost dans la même league
		while (div_old != div_new) {
			if (price != 0) {price = price - 1;} // 1euro de moins toutes les 2 divs
			price = price + parseInt(boost_price[leaguenumber(league_old)][5 - div_old]);
			div_old = div_old - 1;
		}
	} else {
		var ln_old = leaguenumber(league_old);
		var ln_new = leaguenumber(league_new);
		if (div_old != 5) {
		while (div_old != 0) {
			if (price != 0) {price = price - 1;}
			price = parseInt(price) + parseInt(boost_price[ln_old][5 - div_old]);
			div_old = div_old - 1;
		}}
		if (div_old==0) {ln_old++;div_old=5;}
		while (ln_old != ln_new) {
			price = price + parseInt(pack_price[ln_old]);
			ln_old++;
		}
		if (div_new != 5) {
		while (div_old != div_new) {
			if (price != 0) {price = price - 1;}
			price = parseInt(price) + parseInt(boost_price[ln_new][5 - div_old]);
			div_old = div_old - 1;
		}}
	}
elem.innerHTML = '<h3>Prix Total: ' + price + '&euro;</h3><br /><a href="javascript:getprice_boost()"><img src="images/boutons/calculer.png" id="calculate" onclick="getprice_boost()" /></a><input type=image style="margin-left:5%" value=submit src="images/boutons/commander.png" />';
	document.getElementById('amount').value = price;
	document.getElementById('item_name').value= str;
}}}