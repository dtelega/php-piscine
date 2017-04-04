<?PHP

function ft_is_sort($tab) {
	$i = 0;
	$count = count($tab);
	$sort = $tab;
	sort($sort);
	while ($i < $count){
		if (strcmp($sort[$i], $tab[$i]) == 0)
			$i++;
		else {
			return (FALSE);
		}
	}
	return (TRUE);
}

?>