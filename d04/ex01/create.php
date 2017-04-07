<?php

if (!$_POST["submit"] || !$_POST["login"] || !$_POST["passwd"]){
	echo "ERROR\n";
	return false;
}
if (file_exists("../private/")){
	$file = file_get_contents("../private/passwd");
	$data = unserialize($file);
}
$key = 0;
foreach ($data as $key => $value) {
	if ($value["login"] === $_POST["login"]) {
		echo "ERROR\n";
		return false;
	}	
}
$data[$key + 1]["login"] = $_POST["login"];
$data[$key + 1]["passwd"] = hash('ripemd160', $_POST["passwd"]);
mkdir("../private/");
file_put_contents("../private/passwd", serialize($data));
echo "OK\n";
?>
