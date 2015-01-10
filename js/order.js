function	checktier() {
	var tier = document.getElementById('eloboost-league-new');
	var list = document.getElementById('eloboost-division-new');
	if (tier.value != 'diam') {
		list.innerHTML='<option value="5">Division V</option><option value="4">Division IV</option><option value="3">Division III</option><option value="2">Division II</option><option value="1">Division I</option>';
	} else {
		list.innerHTML='<option value="5">Division V</option>'
	}
}
function	cleanform() {
	document.getElementById('type').value = '';
}
function	changeform() {
	var type= document.getElementById('type').value;
	var types = ['boost', 'wins', 'placement'];
	i = 0;
	while (types[i]) {
		if(types[i] == type) {
			document.getElementById('hidden-'+types[i]).style.display = 'inline-block';
		} else {
			document.getElementById('hidden-'+types[i]).style.display = 'none';
		}
		i++;
	}
}
function	verif() {
	var n = true;
	var element = ['summoner', 'skype', 'mail'];
	var f=0;
	while (element[f]) {
		if (document.getElementById(element[f]).value == '') {
			document.getElementById(element[f]).style.border='1px solid #f00';
			n = false;
		}
		f++;
	}
	if (n == false) {alert('Veuillez remplir les champs du formulaire');}
	return n;
}
function	getXhr(){
	var xhr = null; 
	if(window.XMLHttpRequest) { // Firefox et autres
		xhr = new XMLHttpRequest(); 	
		//xhr = new XDomainRequest();
	}
	else if(window.ActiveXObject){ // Internet Explorer 
		try {
			xhr = new ActiveXObject("Msxml2.XMLHTTP");
			xhr = new XMLHttpRequest(); 
		} catch (e) {
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	else { // XMLHttpRequest non supporté par le navigateur 
	   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
	   xhr = false; 
	} 
	return xhr;
}
function	record() {
	if (verif() == false) {return false;}
	var xhr = getXhr();
			
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			return true;
		}
	};
	
	xhr.open ('POST', "includes/save.php",true);
	xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	summoner = document.getElementById('summoner').value;
	skype = document.getElementById('skype').value;
	mail = document.getElementById('mail').value;
	pass = document.getElementById('pass').value;
	comment = document.getElementById('infos').value;
	xhr.send("summoner="+summoner+"&skype="+skype+"&mail="+mail+"&pass="+pass+"&comment="+comment);
}

//Copie de la fonction dans eloboost.js
function	leaguenumber(league) {
	if (league == 'bronz') {return 0;}
	if (league == 'silv') {return 1;}
	if (league == 'gold') {return 2;}
	if (league == 'plat') {return 3;}
	if (league == 'diam') {return 4;}
}
var pack_price = [45, /* Bronze	*/85, /* Argent	*/140, /* Gold	*/215, /* Platine */];
var boost_price = [		
	[ /* Bronze	*/
		10, /* Division 5	*/
		10, /* Division 4	*/
		10, /* Division 3	*/
		10, /* Division 2 */
		15 /* Division 1 ->silver 5*/
	],				
	[ /* Silver	*/
		20, /* Division 5	*/
		20, /* Division 4	*/
		20, /* Division 3	*/
		20, /* Division 2	*/
		25 /* Division 1	*/
	],				
	[ /* Gold */
		30, /* Division 5	*/
		30, /* Division 4	*/
		30, /* Division 3	*/
		30, /* Division 2	*/
		40 /* Division 1	*/
	],				
	[ /* Platinum */
		50, /* Division 5	*/
		50, /* Division 4 */
		50, /* Division 3 */
		50, /* Division 2 */
		65 /* Division 1	*/
	]
];

function	leaguenumber(league) {
	if (league == 'bronz') {return 0;}
	if (league == 'silv') {return 1;}
	if (league == 'gold') {return 2;}
	if (league == 'plat') {return 3;}
	if (league == 'diam') {return 4;}
	if (league == 'unranked') {return 5;}
}

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

function	calculate_price_boost() {
	var elem = document.getElementById('prix-boost');
	var league_old = document.getElementById('eloboost-league-old').value;
	var div_old = document.getElementById('eloboost-division-old').value;
	var lp_old = document.getElementById('eloboost-lp-old').value;
	var league_new = document.getElementById('eloboost-league-new').value;
	var div_new = document.getElementById('eloboost-division-new').value;
	var price = 0;
	var str = get_str_boost(league_old,  div_old, league_new, div_new);

	// On vérifie que la demande est valide
if (leaguenumber(league_old)  > leaguenumber(league_new)) { //Ancienne league > Nouvelle
	elem.innerHTML = '<span style="font-size:1.3em;"> Choix invalide</span>';
} else {
if ((league_old == league_new) && (div_old <= div_new)) { //Même league, nouvelle division < ancienne
	elem.innerHTML = '<span style="font-size:1.3em;"> Choix invalide</span>';		
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
	elem.innerHTML = '<span style="font-size:1.3em;">'+price+' &euro;</span>';
	document.getElementById('amount').value = price;
	document.getElementById('item_name').value= str;
}}}

//Copie de la fonction dans victory.js
var eloboost_tier = [
	[ /* Bronze	*/
		2.625, /* Division 1 */
		2.625, /* Division 2 */
		2.625, /* Division 3	*/
		2.625, /* Division 4	*/
		2.625 /* Division 5	*/
	],				
	[ /* Silver	*/
		5.25, /* Division 1	*/
		4.5, /* Division 2	*/
		3.75, /* Division 3	*/
		3.375, /* Division 4	*/
		3 /* Division 5	*/
	],				
	[ /* Gold */
		9, /* Division 1	*/
		8.25, /* Division 2	*/
		7.5, /* Division 3	*/
		6.75, /* Division 4	*/
		6 /* Division 5	*/
	],				
	[ /* Platinum */
		21, /* Division 1	*/
		17.25, /* Division 2 */
		13.5, /* Division 3 */
		12, /* Division 4 */
		10.5 /* Division 5	*/
	],
	[ /* Diamond */
		45, /* Division 1	*/
		40.5, /* Division 2 */
		34.5, /* Division 3 */
		30, /* Division 4 */
		25.5 /* Division 5	*/
	]
];

function	calculate_price_victory()
{
	var elem = document.getElementById('prix-wins');
	var league = document.getElementById('wins-league').value;
	var div = document.getElementById('wins-division').value;
	var number = document.getElementById('wins-wins').value;
	league = leaguenumber(league);
	var price = eloboost_tier[league][div] * number;
	if (number > 9)
		{price = price - price / 9;}
		price = price - (price % 1);
	elem.innerHTML = '<span style="font-size:1.3em;">'+price+' &euro;</span>';
	document.getElementById('amount').value = price;
	document.getElementById('item_name').value= 'Easy Elo Boost - ' + number + ' Victoires';
}

function	calculate_placement()
{
	var league = document.getElementById('place-league-old').value;
	var price = 0;
	league = leaguenumber(league);
	if (league == 0) {price = 35; }
	else if (league == 1) {price = 45;}
	else if (league == 2) {price = 55;}
	else if (league == 3) {price = 70;}
	else if (league == 5) {price = 40;}
	var elem = document.getElementById('prix-place');
	elem.innerHTML = '<span style="font-size:1.3em;">'+price+' &euro;</span>';
	document.getElementById('amount').value = price;
	document.getElementById('item_name').value= 'Easy Elo Boost - Matchs de Placement';
}