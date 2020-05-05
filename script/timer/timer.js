var day = ["day", "days", "days"];
var hour = ["hour", "hours", "hours"];
var minute = ["minute", "minutes", "minutes"];
var second = ["second", "seconds", "seconds"];

function num2word(num,words) {
	num = num % 100;
	if (num > 19) { num = num%10; }
	switch (num) {
		case 1:  { return(words[0]); }
		case 2: case 3: case 4:  { return(words[1]); }
	default: { return(words[2]); }
  }
}


timeend = new Date(2019, 1, 26, 0, 0);

function time() {
    today = new Date();
    today = Math.floor((timeend-today)/1000);
    tsec = today%60; today=Math.floor(today/60); if(tsec<10)tsec='0'+tsec;
    tmin = today%60; today=Math.floor(today/60); if(tmin<10)tmin='0'+tmin;
    thour = today%24; today=Math.floor(today/24);
	
    timestr = today + " " + num2word(today, day) + " " + thour + " " + num2word(thour, hour) + " " + tmin + " " + num2word(tmin, minute) + " " + tsec + " " + num2word(tsec, second) + " ";
	if(today < 0){
		timestr = "0" + " " + num2word(today, day) + " " + "0" + " " + num2word(thour, hour) + " " + "0" + " " + num2word(tmin, minute) + " " + "0" + " " + num2word(tsec, second) + " ";
	}
	document.getElementById('timer').innerHTML = timestr;
	document.getElementById('h1').style.color = "transparent";
	
    window.setTimeout("time()", 1000);
}
time();
