<?PHP

function ft_is_sort($tab) {
	$sort_tab = $tab;
	sort($sort_tab);
	if (!array_diff_assoc($tab, $sort_tab))
		return TRUE;
	else
		return FALSE;
}
