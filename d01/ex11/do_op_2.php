#!/usr/bin/php
<?php

if ($argc != 2) {
	echo "Incorrect Parameters\n";
	return false;
}
if (preg_match('/[a-z\,\.]/ui', $argv[1]) || preg_match('/[A-Z\,\.]/ui', $argv[1])) {
	echo "Syntax Error\n";
	return false;
}
$i = 0;
while ($argv[1][$i] == ' ')
	$i++;
$num = 0;
while ($argv[1][$i] >= '0' && $argv[1][$i] <= '9' && $argv[1][$i]) {
	$num1 = $num1 * 10 + (int)$argv[1][$i];
	$i++;
}
while ($argv[1][$i] == ' ')
	$i++;
$do = $argv[1][$i++];
while ($argv[1][$i] == ' ')
	$i++;
$num2 = 0;
while ($argv[1][$i] >= '0' && $argv[1][$i] <= '9' && $argv[1][$i]) {
	$num2 = $num2 * 10 + (int)$argv[1][$i];
	$i++;
}
if ($do == '+')
	echo ($num1 + $num2);
else if ($do == '-')
	echo ($num1 - $num2);
else if ($do == '*')
	echo ($num1 * $num2);
else if ($do == '/')
	echo ($num1 / $num2);
else if ($do == '%')
	echo ($num1 % $num2);
else
	echo "Syntax Error";
echo "\n";
?>