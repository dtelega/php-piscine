// ************************************************************************** //
//                                                                            //
//                                                        :::      ::::::::   //
//   todo.js                                            :+:      :+:    :+:   //
//                                                    +:+ +:+         +:+     //
//   By: dtelega <marvin@42.fr>                     +#+  +:+       +#+        //
//                                                +#+#+#+#+#+   +#+           //
//   Created: 2017/04/14 18:39:07 by dtelega           #+#    #+#             //
//   Updated: 2017/04/14 18:39:08 by dtelega          ###   ########.fr       //
//                                                                            //
// ************************************************************************** //

$text = "default";
$i = -1;

window.onload = function() {
	nbcook = 0;
	var a = reload_cookie();
	function setCookie(cname, cvalue, exdays) {
		var d = new Date();
    	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    	var expires = "expires="+d.toUTCString();
    	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	var New = document.getElementById("new_butt");
	New.addEventListener("click", function() {
	var newToDo = prompt("Please enter new to do:");
	if (newToDo) {
		create(newToDo);
	}
});

	function reload_cookie (){
		var cookieList = document.cookie.split(';');
		for(var i = 0; i < cookieList.length; i++) {
			var cookie = cookieList[i];
			while (cookie.charAt(0)==' ') {
				cookie = cookie.substring(1);
			}
			if (cookie.indexOf("todo") === 0) {
				var brokenCookie = cookie.split('=');
				var indexOfCookie = brokenCookie[0];
				var valueofCookie = brokenCookie[1];
				setCookie(indexOfCookie, "", -1);
				create(valueofCookie);
			}
		}
	}

	function create ($text) {
		if ($text === "")
			return ;
		var div = document.createElement('div');
		div.className='todo';
		div.innerHTML = $text;
		ft_list.insertBefore(div, ft_list.children[0]);
		nbcook++;
		itemId = "todo" + nbcook;
        setCookie(itemId, $text, 10000);
        div.id = itemId
		div.addEventListener("click", function(eventObject) {
			var conf = confirm("Are you sure ?");
			if (conf) {
				setCookie(eventObject.target.id, "", Date() - 1);
				eventObject.target.remove();
			}
		});
	}
}