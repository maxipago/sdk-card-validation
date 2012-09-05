/**
 * Credit card validation check in JavaScript
 *
 * Source: http://rosettacode.org/wiki/Luhn_test_of_credit_card_numbers
*/
var luhnCheck = function(a,b,c,d,e) {
	for(d = +a[b = a.length-1], e=0; b--;)
	c = +a[b], d += ++e % 2 ? 2 * c % 10 + (c > 4) : c;
	return !(d%10)
}