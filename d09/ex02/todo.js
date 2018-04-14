window.onload = function() {
	cookie_size = 0;

	function getCookie(cname) {
		var name = (cname + "=");
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}

	function setCookie(name, value, days)
	{
		if (days)
		{
			var date = new Date();
			date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
			var expires = "; expires=" + date.toGMTString();
		}
		else
			var expires = "";
		document.cookie = name + "=" + value + expires + ";path=/";
	}

	function addTask(text) {
		cookie_size++;
		itemId = "todo" + cookie_size;
		setCookie(itemId, text, 10000);
		var newItem = document.createElement("div");
		newItem.id = itemId;
		newItem.appendChild(document.createTextNode(text));
		newItem.addEventListener("click", function(eventObject) {
			var areTheySure = confirm("Are you sure?");
			if (areTheySure) {
				setCookie(eventObject.target.id, "", -1);
				eventObject.target.remove();
			}
		});
		var list = document.getElementById("ft_list");
		list.insertBefore(newItem, list.childNodes[0]);
	}

	var newButton = document.getElementById("add_item");
	newButton.addEventListener("click", function() {
		var newTaskText = prompt("Enter the task name", "");
		if (newTaskText)
			addTask(newTaskText);
	});

	var cookieList = document.cookie.split(';');
	for(var i = 0; i < cookieList.length; i++) {
		var cookie = cookieList[i];
		while (cookie.charAt(0) == ' ') {
			cookie = cookie.substring(1);
		}
		if (cookie.indexOf("todo") === 0) {
			var brokenCookie = cookie.split('=');
			var indexOfCookie = brokenCookie[0];
			var valueofCookie = brokenCookie[1];
			setCookie(indexOfCookie, "", -1);
			addTask(valueofCookie);
		}
	}
}
