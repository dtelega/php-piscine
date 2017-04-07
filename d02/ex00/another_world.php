#!/usr/bin/php
<?PHP

if ($argc < 2)
	return false;
$res = array();
$tab = array();
$tab = explode(" ", $argv[1]);
$ss = array();
foreach ($tab as $key => $value) {
	$ss = explode("\t", $value);
	$res = array_merge($res, $ss);
}
$c = 0;
foreach ($res as $key => $value) {
	if ($value){
		if ($c != 0)
			echo " ";
		echo $value;
		$c++;
	}
}
echo "\n";

?>