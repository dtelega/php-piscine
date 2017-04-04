#!/usr/bin/php
<?php

if ($argc != 4){
	echo "Incorrect Parameters\n";
	return false;
	}

if (!ctype_digit($argv[1]) || !ctype_digit($argv[3]))
	return false;
$argv[1] += 0;
$argv[3] += 0;
if ($argv[2] == "+")
	echo ($argv[1] + $argv[3]);
else if ($argv[2] == "-")
	echo ($argv[1] - $argv[3]);
else if ($argv[2] == "*")
	echo ($argv[1] * $argv[3]);
else if ($argv[2] == "/")
	echo ($argv[1] / $argv[3]);
else if ($argv[2] == "%")
	echo ($argv[1] % $argv[3]);
else
	echo "Error";
echo "\n";

?>