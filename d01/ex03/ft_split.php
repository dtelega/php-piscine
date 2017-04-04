<?PHP

function ft_split($str) {
	echo "Array\n(\n";
	$tab = explode(" ", $str);
	sort($tab);
	$count = count($tab);
	$i = 0;
	while ($i < $count) {
		echo "    [";
		echo ($i);
		echo "] => ";
		echo ($tab[$i++]);
		echo "\n";
	}
	echo ")\n";
}

?>