<?php

if (!$_POST["submit"] || !$_POST["login"] || !$_POST["oldpw"] || !$_POST["newpw"]){
	echo "ERROR\n";
	return false;
}
if (file_exists("../private/")){
	$file = file_get_contents("../private/passwd");
	$data = unserialize($file);
}
foreach ($data as $key => $value){
	if ($value["login"] === $_POST["login"]){
		if ($value["passwd"] === hash('ripemd160', $_POST["oldpw"])){
			$data[$key]["passwd"] = hash('ripemd160', $_POST["newpw"]);
			mkdir("../private/");
			file_put_contents("../private/passwd", serialize($data));
			echo "OK\n";
			return ;
		}
	}	
}
echo "ERROR\n";

?>