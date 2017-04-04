#!/usr/bin/php
<?PHP

$tab = $argv;
sort($tab);
$i = 1;
$new = array();
while ($i < $argc) {
	$subtab = explode(" ", $tab[$i]);
	$new = array_merge($new, $subtab);
	$i++;
}
sort($new);
$i = 0;
$count = count($new);
while ($i < $count){
	echo ($new[$i++]);
	echo "\n";
}

?>