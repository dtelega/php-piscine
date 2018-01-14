#!/usr/bin/php
<?PHP
	
	if ($argc == 1)
		return ;
	$tab = array_filter(explode(' ', $argv[1]));
	$first = $tab[0];
	unset($tab[0]);
	foreach ($tab as $k) {
		echo $k." ";
	}
	echo $first."\n";
