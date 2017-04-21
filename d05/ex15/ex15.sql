SELECT REVERSE(right(phone_number, LENGTH(phone_number) - 1)) as "rebmunenohp" FROM distrib
	WHERE phone_number LIKE '05%';