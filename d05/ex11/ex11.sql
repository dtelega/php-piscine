SELECT UCASE(last_name) as "NAME", first_name, subscription.price FROM user_card
	INNER JOIN member
	ON (user_card.id_user=member.id_user_card)
	INNER JOIN subscription
	ON (subscription.id_sub=member.id_sub)
	WHERE subscription.price>42
	ORDER BY last_name, last_name;