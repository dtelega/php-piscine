#!/usr/bin/php
<?PHP

	function sorted($elem1, $elem2) {
		$elem1 = strtolower($elem1);
		$elem2 = strtolower($elem2);
		$tab = array();
		$tab[0] = $elem1;
		$tab[1] = $elem2;
		$sort = $tab;
		sort($tab);
	}

	unset($argv[0]);
	$array = array();
	foreach ($argv as $elem) {
		$subtab = array_filter(explode(" ", $elem));
		foreach ($subtab as $elem) {
			$array[] = $elem;
		}
	}
	$i = 0;
	foreach ($array as $elem) {
		echo $elem."\n";
	}
	/*while ($i < count($array) - 1) {
		if (sorted($array[$i], $array[$i + 1])){
			$i++;
		}
		else {
			$temp = $array[$i];
			$array[$i] = $array[$i + 1];
			$array[$i + 1] = $temp;
			$i = 0;
		}
	}
	foreach ($array as $v)
		echo $v."\n";
*/