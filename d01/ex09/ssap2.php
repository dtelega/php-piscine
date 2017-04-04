#!/usr/bin/php
<?PHP

$tab = $argv;
$i = 1;
$new = array();
while ($i < $argc) {
	$subtab = explode(" ", $tab[$i]);
	$new = array_merge($new, $subtab);
	$i++;
}
natcasesort($new);
foreach ($new as $key => $var){
	if (ctype_alpha($var)){
		echo ($var);
		echo "\n";
		unset($new[$key]);
	}
}
sort($new, SORT_STRING);
foreach ($new as $key => $var){
	if (ctype_digit($var)){
		echo ($var);
		echo "\n";
		unset($new[$key]);
	}
}
foreach ($new as $ket => $var) {
	echo($var);
	echo "\n";
	unset ($new[$key]);
}

?>