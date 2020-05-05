<!DOCTYPE html>

<!-- Инициализируем html страницу -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>|MediaPlayer Radio|</title>
		<link rel="shortcut icon" href="img/favicon.png" type="image/png" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
	</head>
	
	<style>
	.audio {
		margin-top: 200px;
		width: 25%;
	}
	.audio:hover, .audio:focus, .audio:active{
		-webkit-box-shadow: 15px 15px 20px rgba(0,0, 0, 0.4);
		-moz-box-shadow: 15px 15px 20px rgba(0,0, 0, 0.4);
		box-shadow: 15px 15px 20px rgba(0,0, 0, 0.4);
		-webkit-transform: scale(1.05);
		-moz-transform: scale(1.05);
		transform: scale(1.05);
	}


	.audio{
		-webkit-transition:all 0.5s linear;
		-moz-transition:all 0.5s linear;
		-o-transition:all 0.5s linear;
		transition:all 0.5s linear;
		-moz-box-shadow: 2px 2px 4px 0px #006773;
		-webkit-box-shadow:  2px 2px 4px 0px #006773;
		box-shadow: 2px 2px 4px 0px #006773;
		-moz-border-radius:7px 7px 7px 7px ;
		-webkit-border-radius:7px 7px 7px 7px ;
		border-radius:7px 7px 7px 7px ;
	}
	</style>
	
	<body>
		<!-- Верхний текст -->
		<h1 class="mediaplayer">
			<center>
				| MediaPlayer Radio|
				<div class="by" onclick="goTo();">
					By leoltd.zzz.com.ua
				</div>
			</center>
		</h1>
		
		<!-- Полоса громкости -->
		<div class="range">
			<span class="rangetext">Громкость:</span> 
			<input type="range" id="range" min="0" max="1.0" step="0.01" value="<?if(isset($_COOKIE['radio_volume']))echo $_COOKIE['radio_volume']; else echo 1;?>" oninput="saveVolume();" />
		</div>
		
		<!-- Контейнер видео -->
		<center id="content_audio">
			<audio controls="" name="media" class="audio" id="audio" src="http://eu2.radioboss.fm:8091/autodj"></audio>
		</center>
		
		<!-- Кнопки -->
		<!--<div class="buttons">
			<center>
				<a href="" class="button" id="button_download">Скачать</a>
				<!--<a class="button" id="button_copy" onclick="copy();">Скопировать ссылку на это видео в плеере</a>--><!--
			</center>
		</div>-->
	
	</body>
</html>

<script>
var audio = document.getElementById('audio');
var range = document.getElementById('range');

function saveVolume(){
	audio.volume = range.value;
	document.cookie = "radio_volume=" + range.value;
	console.log('Текущая громкость: ' + range.value);
}
saveVolume();

window.onkeydown = function (e) {
	//console.log('Кнопка нажата: ' + e.keyCode);
	switch(e.keyCode){
		case 32:
			//Пробел: пауза/продолжить
			if (audio.paused){
				audio.play();
			}else{
				audio.pause();
			}
		break;
		case 38:
			//Стрелка вверх: +0.1 к громкости
			if (audio.volume < 1){
				audio.volume += 0.1;
				range.value += 0.1;
				document.cookie = "volume=" + audio.volume;
				console.log('Громкость изменена: ' + audio.volume);
			}
		break;
		case 40:
			//Стрелка вниз: -0.1 к громкости
			if (audio.volume > 0){
				audio.volume -= 0.1;
				range.value += 0.1;
				document.cookie = "volume=" + audio.volume;
				console.log('Громкость изменена: ' + audio.volume);
			}
		break;
	}
};
</script>