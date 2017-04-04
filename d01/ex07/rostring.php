#!/usr/bin/php
<?PHP

if (!$argv[1])
	return ;
$tab = explode(" ", $argv[1]);
$count = count($tab);
$i = 1;
$c = 0;
$arr = array();
while ($i < $count){
	if ($tab[$i]){
		echo ($tab[$i]);
		echo (" ");
	}
	$i++;
}
echo ($tab[0]);
$count = count($arr);
$i = 0;
while ($i < $count){
	if ($i != 0)
		echo " ";
	echo ($arr[$i]);
}
echo "\n";

?>