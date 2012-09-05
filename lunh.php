/**
 * Credit card validation check in PHP
 *
 * Source: http://rosettacode.org/wiki/Luhn_test_of_credit_card_numbers
*/
<?php
function luhnCheck($num) {
	$str = '';
	foreach(array_reverse(str_split($num)) as $i => $c) $str .= ($i % 2 ? $c * 2 : $c );
	return array_sum( str_split($str) ) % 10 == 0;
}
?>