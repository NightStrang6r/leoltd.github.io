function MonitoringJS(){
	console.log('>>Monitoring.js loaded.');
	
	function getCookie(name) {
		var matches = document.cookie.match(new RegExp(
			"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
		));
		return matches ? decodeURIComponent(matches[1]) : undefined;
    }
	
	
	var reqLink = "http://leoltd.zzz.com.ua/script/monitoring/monitoring.php?";
	var loc = window.location;
	var body = "location=" + loc;
	
	if(getCookie('MonitoringJS') == "1"){
		body = body + "&alreadywas=1";
		console.log('>>Monitoring.js: User already was on this site.');
	}
	
	document.cookie = "MonitoringJS=1";
	
	var request = new XMLHttpRequest();
	function reqReadyStateChange() {
		if (request.readyState == 4) {
			var status = request.status;
			if (status == 200) {
				document.getElementById("output").innerHTML=request.responseText;
			}
		}
	}
		
	request.open("GET", reqLink + body);
	request.onreadystatechange = reqReadyStateChange;
	request.send();
	
	console.log('>>Monitoring.js: Request was send.');
	
}
MonitoringJS();