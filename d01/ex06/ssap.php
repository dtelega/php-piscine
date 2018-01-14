#!/usr/bin/php
<?PHP
	unset($argv[0]);
	$array = array();
	foreach ($argv as $elem) {
		$subtab = array_filter(explode(" ", $elem));
		foreach ($subtab as $elem) {
			$array[] = $elem;
		}
	}
	sort($array);
	foreach ($array as $elem) {
		echo $elem."\n";
	}
