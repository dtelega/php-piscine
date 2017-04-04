#!/usr/bin/php
<?PHP

if ($argc == 1)
	return (0);
$tab = explode(" ", $argv[1]);
$count = count($tab);
$i = 0;
$word = 0;
while ($i < $count) {
	if ($tab[$i]) {
		if ($word != 0)
			echo (" ");
		echo ($tab[$i]);
		$word++;
	}
	$i++;
}
echo "\n";


?>