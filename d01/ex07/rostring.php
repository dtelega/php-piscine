#!/usr/bin/php
<?php
	
	if ($argc == 1)
		return ;
	$tab = array_filter(explode(' ', trim($argv[1])));
	$first = $tab[0];
	unset($tab[0]);
	foreach ($tab as $k) {
		echo $k." ";
	}
	echo $first."\n";
