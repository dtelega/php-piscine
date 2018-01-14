<?PHP
	include("ft_is_sort.php");
	
	$tab = array("1", "2", "0");	
	if (ft_is_sort($tab))
		echo "The array is sorted\n";
	else
		echo "The array is not sorted\n";
