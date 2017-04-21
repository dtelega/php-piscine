SELECT name, id_distrib FROM distrib
	WHERE distrib.id_distrib REGEXP ('42|6[1-9]|7[0-1]|8[8-9]|90')
	AND distrib.name LIKE '%y%y%'
	LIMIT 2,5;