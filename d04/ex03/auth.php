<?php

function auth($login, $passwd)
{
	if (!$login || !$passwd){
		echo "ERROR\n";
		return false;
	}
	$file = file_get_contents("../private/passwd");
	if (!$file)
		return false;
	$data = unserialize($file);
	foreach ($data as $key => $value){
		if ($value["login"] === $login)
		{
			if ($value["passwd"] === hash('ripemd160', $passwd))
			{
				return true;
			}
		}
	}
	return false;
}

?>