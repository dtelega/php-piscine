#!/usr/bin/php
<?php

if ($argc != 2)
	return (0);
$tab = array_filter(explode(" ", $argv[1]));
foreach($tab as $i)
	$res .= $i." ";
$res = trim($res);
echo $res, "\n";
