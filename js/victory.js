function	gettier() {
	var img = document.getElementById('tier-img');
	var league = document.getElementById('eloboost-league').value;
	
	if (league == 'bronz') {img.src = 'images/bronz.png';}
	if (league == 'silv') {img.src = 'images/silv.png';}
	if (league == 'gold') {img.src = 'images/gold.png';}
	if (league == 'plat') {img.src = 'images/plat.png';}
}

function	leaguenumber(league) {
	if (league == 'bronz') {return 0;}
	if (league == 'silv') {return 1;}
	if (league == 'gold') {return 2;}
	if (league == 'plat') {return 3;}
	if (league == 'diam') {return 4;}
}

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

function calc_victory()
{
	var league = document.getElementById('eloboost-league').value;
	var div = document.getElementById('eloboost-division').value;
	var number = document.getElementById('eloboost-wins').value;
	league = leaguenumber(league);
	var price = eloboost_tier[league][div] * number;
	if (number > 9)
		{price = price - price / 9;}
		var elem = document.getElementById('prix');
		price = price - (price % 1);
	elem.innerHTML = '<h3>Prix Total: ' + price + '&euro;</h3><br /><a href="javascript:calc_victory()"><img src="images/boutons/calculer.png" /></a><input type=image style="margin-left:5%" value=submit src="images/boutons/commander.png" />';
	document.getElementById('amount').value = price;
	document.getElementById('item_name').value= 'Easy Elo Boost - ' + number + ' Victoires';
}