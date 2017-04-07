#!/usr/bin/php
<?PHP

date_default_timezone_set('Europe/Paris');
if ($argc != 2)
	return false;
$data = explode(" ", $argv[1]);
if (count($data) != 5){
	echo "Wrong Format\n";
	return false;
}
if ($data[0] === "lundi" || $data[0] === "Lundi")
	$week = 1;
else if ($data[0] === "mardi" || $data[0] === "Mardi")
	$week = 2;
else if ($data[0] === "mercredi" || $data[0] === "Mercredi")
	$week = 3;
else if ($data[0] === "jeudi" || $data[0] === "Jeudi")
	$week = 4;
else if ($data[0] === "vendredi" || $data[0] === "Vendredi")
	$week = 5;
else if ($data[0] === "samedi" || $data[0] === "Samedi")
	$week = 6;
else if ($data[0] === "dimanche" || $data[0] === "Dimanche")
	$week = 7;
else{
	echo "Wrong Format\n";
	return false;
}
if (!ctype_digit($data[1]) || iconv_strlen($data[1]) > 2){
	echo "Wrong Format\n";
	return false;
}
$day = (int)$data[1];
if ($day < 0 || $day > 12){
	echo "Wrong Format\n";
	return false;
}
if ($data[2] === "janvier" || $data[2] === "Janvier")
	$mounth = 1;
else if ($data[2] === "février" || $data[2] === "Février")
	$mounth = 2;
else if ($data[2] === "mars" || $data[2] === "Mars")
	$mounth = 3;
else if ($data[2] === "avril" || $data[2] === "Avril")
	$mounth = 4;
else if ($data[2] === "mai" || $data[2] === "Mai")
	$mounth = 5;
else if ($data[2] === "juin" || $data[2] === "Juin")
	$mounth = 6;
else if ($data[2] === "juillet" || $data[2] === "Juillet")
	$mounth = 7;
else if ($data[2] === "août" || $data[2] === "Août")
	$mounth = 8;
else if ($data[2] === "septembre" || $data[2] === "Septembre")
	$mounth = 9;
else if ($data[2] === "octobre" || $data[2] === "Octobre")
	$mounth = 10;
else if ($data[2] === "novembre" || $data[2] === "Novembre")
	$mounth = 11;
else if ($data[2] === "décembre" || $data[2] === "Décembre")
	$mounth = 12;
else{
	echo "Wrong Format\n";
	return false;
}
if (!ctype_digit($data[3]) || iconv_strlen($data[3]) != 4){
	echo "Wrong Format\n";
	return false;
}
$year = (int)$data[3];
$time = explode(":", $data[4]);
if (count($time) != 3){
	echo "Wrong Format\n";
	return false;
}
$hours = (int)$time[0];
if ($hours < 0 || $hours > 24){
	echo "Wrong Format\n";
	return false;
}
$minut = (int)$time[1];
if ($minut < 0 || $minut > 60){
	echo "Wrong Format\n";
	return false;
}
$sec = (int)$time[2];
if ($sec < 0 || $sec > 60){
	echo "Wrong Format\n";
	return false;
}
echo (mktime($hours, $minut, $sec, $mounth, $day, $year));
echo "\n";
?>