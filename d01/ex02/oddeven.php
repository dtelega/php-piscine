#!/usr/bin/php
<?PHP

while (1)
{
	echo "Enter a number: ";
	if (!($num = trim(fgets(STDIN))) && strcmp($num, "0"))
		break ;
	if (is_numeric($num))
	{
		echo "The number ";
		echo ($num);
		echo " is ";
		if ($num%2 == 0)
			echo "even\n";
		else
			echo "odd\n";
	}
	else
	{
		echo "'";
		echo ($num);
		echo "' is not a number\n";
	}
}
echo "\n";

?>