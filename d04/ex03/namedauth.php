<?php

if (auth($login, $passwd))
	echo "OK\n";
else
	echo "KO\n";

?>