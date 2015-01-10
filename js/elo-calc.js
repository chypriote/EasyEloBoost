$(document).ready(function() {
	var eloboost_tier = [		
		[ /* Bronze	*/
			{'EUR':2.625, 'USD':3.5}, /* Division 5	*/
			{'EUR':2.625, 'USD':3.5}, /* Division 4	*/
			{'EUR':2.625, 'USD':3.5}, /* Division 3	*/
			{'EUR':2.625, 'USD':3.5}, /* Division 2 */
			{'EUR':2.625, 'USD':3.5} /* Division 1 */
		],				
		[ /* Silver	*/
			{'EUR':3, 'USD':4}, /* Division 5	*/
			{'EUR':3.375, 'USD':4.5}, /* Division 4	*/
			{'EUR':3.75, 'USD':5}, /* Division 3	*/
			{'EUR':4.5, 'USD':6}, /* Division 2	*/
			{'EUR':5.25, 'USD':7} /* Division 1	*/
		],				
		[ /* Gold */
			{'EUR':6, 'USD':8}, /* Division 5	*/
			{'EUR':6.75, 'USD':9}, /* Division 4	*/
			{'EUR':7.5, 'USD':10}, /* Division 3	*/
			{'EUR':8.25, 'USD':11}, /* Division 2	*/
			{'EUR':9, 'USD':12} /* Division 1	*/
		],				
		[ /* Platinum */
			{'EUR':10.5, 'USD':14}, /* Division 5	*/
			{'EUR':12, 'USD':16}, /* Division 4 */
			{'EUR':13.5, 'USD':18}, /* Division 3 */
			{'EUR':17.25, 'USD':23}, /* Division 2 */
			{'EUR':21, 'USD':28} /* Division 1	*/
		],
		[ /* Diamond */
			{'EUR':25.5, 'USD':34}, /* Division 5	*/
			{'EUR':30, 'USD':40}, /* Division 4 */
			{'EUR':34.5, 'USD':46}, /* Division 3 */
			{'EUR':40.5, 'USD':54}, /* Division 2 */
			{'EUR':45, 'USD':60} /* Division 1	*/
		]
	];
	
	var eloboost_promotion = [		
		[ /* Bronze	*/
			{'EUR':10.5, 'USD':14}, /* Division 5	*/
			{'EUR':10.5, 'USD':14}, /* Division 4	*/
			{'EUR':10.5, 'USD':14}, /* Division 3	*/
			{'EUR':10.5, 'USD':14}, /* Division 2 */
			{'EUR':10.5, 'USD':14} /* Division 1 ->silver 5*/
		],				
		[ /* Silver	*/
			{'EUR':15.75, 'USD':21}, /* Division 5	*/
			{'EUR':12, 'USD':16}, /* Division 4	*/
			{'EUR':13.5, 'USD':18}, /* Division 3	*/
			{'EUR':15, 'USD':20}, /* Division 2	*/
			{'EUR':18, 'USD':24} /* Division 1	*/
		],				
		[ /* Gold */
			{'EUR':31.5, 'USD':42}, /* Division 5	*/
			{'EUR':24, 'USD':32}, /* Division 4	*/
			{'EUR':27, 'USD':36}, /* Division 3	*/
			{'EUR':30, 'USD':40}, /* Division 2	*/
			{'EUR':33, 'USD':44} /* Division 1	*/
		],				
		[ /* Platinum */
			{'EUR':54, 'USD':72}, /* Division 5	*/
			{'EUR':42, 'USD':56}, /* Division 4 */
			{'EUR':48, 'USD':64}, /* Division 3 */
			{'EUR':54, 'USD':72}, /* Division 2 */
			{'EUR':69, 'USD':92} /* Division 1	*/
		],
		[ /* Diamond */
			{'EUR':126, 'USD':168}, /* Division 5	*/
			{'EUR':102, 'USD':136}, /* Division 4 */
			{'EUR':120, 'USD':160}, /* Division 3 */
			{'EUR':138, 'USD':184}, /* Division 2 */
			{'EUR':162, 'USD':216} /* Division 1	*/
		]
	];
	
	var tier_list = [
		'Bronze',
		'Silver',
		'Gold',
		'Platinum',
		'Diamond'
	];
	
	var div_list = [
		'V',
		'IV',
		'III',
		'II',
		'I'
	];
	
	var eloboost_calc = function(currency, tier, div, win) {
		var cost = eloboost_tier[tier][div][currency] * win;
		return (cost).toFixed(2);
	};
	
	var eloboost_promo_calc = function(currency, tier, div) {
		var cost = eloboost_promotion[tier][div][currency];
		return (cost).toFixed(2);
	};
	
	var validate = {
		row: function(row) {
			var all,
				err = 0,
				that = this;
			
			$('input[type=text], select', row).each(function() {
				if (!that.check(this)) err++;
			});
			
			$('input[type=radio]', row).each(function() {
				if ($(this).is(':checked')) err = 0;
			});
			
			this.error(row, all = !(err > 0));
			return all;
		},
		
		check: function(field) {
			var type = this.type(field),
				val = $(field).attr('value');
			
			return (type['type'] ? this.test[type['type']](val) : val != '');
		},
		
		type: function (field) {
			var i,
				part = [],
				args = [],
				parts = $(field).attr('class').split(' ');

			for (i = parts.length; i--;)
				if (parts[i].slice(0, 8) == 'validate') {
					part = parts[i].slice(9, -1).split(':');
					args = part.length > 1 ? part[1].split(',') : [];
				}

			return {
				type: part[0],
				args: args
			};
		},
		
		error: function(row, value) {
			if (value) row.removeClass('error').addClass('valid');
			else row.addClass('error').removeClass('valid');
		},
	
		test: {
			num: function(n) {
				n = n.replace(/,/g, '');
				return (!isNaN(parseFloat(n)) && isFinite(n)) && n >= 0;
			},
			
			perc: function(n) {
				n = n.replace(/,/g, '');
				return ((!isNaN(parseFloat(n)) && isFinite(n)) && n > 0) && n <= 100;
			}
		}
	};
	
	$('form.validate').each(function() {
		var validate_form = this;
		
		/* Initial bind */
		$('.validate-row', validate_form).each(function() {
			var validate_row = this;
			
			$('input[type=text], input[type=radio], select', validate_row).each(function() {
				$(this).bind('blur change', function() {
					validate.row(validate_row);
					
					$('#eloboost-payment-options').addClass('hidden');
					$('#eloboost-payment').addClass('hidden');
					$('#calculate-cost').show();
				});
			});
		});
		
		$('#eloboost-tier, #eloboost-division').bind('click', function() {
			var tier = $('#eloboost-tier').val();
			var div = $('#eloboost-division').val();
			
			if (tier != '' && div != '') {
				$('#tier-image').attr('src', '/images/tiers/' + tier + '_' + div + '.png');
				
				if ($(validate_form).hasClass('promotion')) {
					var next_tier = (div == 4 ? parseInt(tier) + 1 : parseInt(tier));
					var next_div = (div == 4 ? 0 : parseInt(div) + 1);
					
					$('#tier-image0').attr('src', '/images/tiers/' + next_tier + '_' + next_div +'.png');
					
					var promotion = 'You will be promoted to ' + tier_list[next_tier] + ' Division ' + div_list[next_div];
					$('#promoted-to').html(promotion);
				}
			}
		});
		
		/* Submission */
		$('.validate-submit', validate_form).bind('click', function(event) {
			var err = 0,
				validate_click = this;
				
			event.preventDefault();
			
			
			
			$('.validate-row', validate_form).each(function() {
				if (!validate.row(this)) err++;
			});
			
			if (!(err > 0)) {
				var _currency = $('input[name=eloboost-region]:checked').val();
				var _tier = $('#eloboost-tier').attr('value');
				var _div = $('#eloboost-division').attr('value');
				var _cost = 0;
				
				if ($(validate_form).hasClass('promotion')) {
					var next_tier = (_div == 4 ? parseInt(_tier) + 1 : parseInt(_tier));
					var next_div = (_div == 4 ? 0 : parseInt(_div) + 1);
					
					_cost = eloboost_promo_calc(_currency, next_tier, next_div);
					
				}
				
				else {
					var _win = $('#eloboost-wins').attr('value');
					_cost = eloboost_calc(_currency, _tier, _div, _win);
					
					if ((_currency == 'USD' && _cost < 10) || (_currency == 'EUR' && _cost < 7.5)) {
						_cost = 0;
						$('#minimum-order').removeClass('hidden');
						$('#minimum-order').click(function() {
							$(this).addClass('hidden');
						});
					}
				}
				
				// If cost is not 0, undefined or NaN
				if (_cost > 0) {
					$('#paypal-currency').attr('value', _currency);
					$('#paypal-amount').attr('value', _cost);
					
					if ($('#minimum-order').length)
						$('#minimum-order').addClass('hidden');
					
					$(validate_click).fadeOut(300, function() {
						var payment_options = $('#eloboost-payment-options'),
						payment_amount = $('#eloboost-payment');
					
						payment_amount.removeClass('hidden').html((_currency == 'USD' ? '&dollar;' : '&euro;') + ' ' + _cost);
						payment_options.removeClass('hidden');
					});
				}
			}
		});
	});
});