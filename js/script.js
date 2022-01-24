


//Отвечает за подписку
var form = document.querySelector("#asd_subscribe_form");
console.dir(form);
form.onsubmit = function(event)
{
	event.preventDefault();
	var status = form.querySelector("input[name = 'status']");

	


	var dannie = "submit=1" +
					"&status=" + status.value; 
					

	var ajax = new XMLHttpRequest();
		ajax.open("POST", form.action, false);
		ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		ajax.send(dannie);

	console.dir(ajax);

	var subscribe = document.querySelector("#Subscribe");
		subscribe.value = ajax.response;
}


