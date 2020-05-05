<!DOCTYPE html>

<!-- Инициализируем html страницу -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>|MediaPlayer|</title>
		<link rel="shortcut icon" href="img/favicon.png" type="image/png" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
	</head>
	
	<style>
	
	</style>
	
	<body>
		<!-- Верхний текст -->
		<h1 class="mediaplayer">
			<center>
				| MediaPlayer |
				<div class="by" onclick="goTo();">
					By leoltd.zzz.com.ua
				</div>
			</center>
		</h1>
		
		<!-- Полоса громкости -->
		<div class="range">
			<span class="rangetext">Громкость:</span> 
			<input type="range" id="range" min="0" max="1.0" step="0.01" value="<?if(isset($_COOKIE['volume']))echo $_COOKIE['volume']; else echo 1;?>" oninput="saveVolume();" />
		</div>
		
		<!-- Поле для ввода ссылки -->
		<div class="input-wrapper" data-text="">
			<input type="text" id="input" value="<?if(isset($_GET['url'])) echo $_GET['url']; else echo $_COOKIE['url'];?>" placeholder="Url..." oninput="edit();" />          
		</div>
		
		<!-- Контейнер видео -->
		<center id="content_video">
			
		</center>
		
		<!-- Кнопки -->
		<div class="buttons">
			<center>
				<a href="" class="button" id="button_download">Скачать</a>
				<!--<a class="button" id="button_copy" onclick="copy();">Скопировать ссылку на это видео в плеере</a>-->
			</center>
		</div>
		
		<!-- История -->
		<div class="history">
			<center>
				История просмотров:
				<div id="table">
					
				</div>
			</center>
		</div>
		
		<!-- Немножечко красивого яваскрипта (для поля ввода)-->
		<script  src="js/input.js"></script>
	
	</body>
</html>

<script>
//Получаем элементы страницы
var content_video = document.getElementById('content_video');
var input = document.getElementById('input');
var input_wrapper = document.getElementsByClassName('input-wrapper');
var range = document.getElementById('range');
var button_download = document.getElementById('button_download');

//Функция получения значения cookie по имени
function getCookie(name) {
	var matches = document.cookie.match(new RegExp(
	"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
	));
	if(matches)
		return decodeURIComponent(matches[1]);
	//return matches ? decodeURIComponent(matches[1]) : undefined;
}

//Функция открытия новой вкладки с ссылкой
function goTo(){
	window.open('http://leoltd.zzz.com.ua');
}

//Функция обновления видеоплеера
//выполняется при каждом изменении поля ссылки
function edit(){
	//Ставим атрибут для красивенькой анимации
	input_wrapper[0].setAttribute('data-text', input.value);
	
	//Обновляем видео при вводе новой ссылки и устанавливаем время
	content_video.innerHTML = '<video preload="auto" controls="controls" id="video" src="' + input.value + '"></video>';
	var video = document.getElementById('video');
	if(getCookie('time') !== null){
		video.currentTime = getCookie('time');
	}
	
	button_download.setAttribute('href', input.value);
	
	//Создаём куки, чтобы постоянно не вводить ссылку
	document.cookie = "url=" + input.value;
	history.pushState({}, null, 'http://leoltd.zzz.com.ua/script/mediaplayer/?url=' + input.value);
}
edit();

//Функция сохранения текущего времени в cookie
function saveTime(){
	document.cookie = "time=" + video.currentTime;
	console.log('Сохранена текущая секунда видео: ' + video.currentTime);
}

//Сохраняем каждые 2 секунды
setInterval(saveTime, 2000);

//Функция сохранения текущей громкости в cookie
function saveVolume(){
	video.volume = range.value;
	document.cookie = "volume=" + range.value;
	console.log('Текущая громкость: ' + range.value);
}
saveVolume();

/*function saveHistory(){
	//if(video.currentTime >= 300){
		if(getCookie('history') !== ''){
			document.cookie = "history=" + getCookie('history') + '\n' + input.value;
			console.log(getCookie('history'));
		}else{
			document.cookie = "history=0";
		}
	//}
	var table = document.getElementById('table');
	table.innerHTML = getCookie('history');
}*/

//Обработка нажатий клавиш
window.onkeydown = function (e) {
	//console.log('Кнопка нажата: ' + e.keyCode);
	switch(e.keyCode){
		case 32:
			//Пробел: пауза/продолжить
			if (video.paused){
				video.play();
			}else{
				video.pause();
			}
		break;
		case 39:
			//Стрелка вправо: +10 секунд к времени
			video.currentTime += 10;
			console.log('Секунда видео изменена: ' + video.currentTime);
		break;
		case 37:
			//Стрелка влево: -10 секунд к времени
			video.currentTime -= 10;
			console.log('Секунда видео изменена: ' + video.currentTime);
		break;
		case 38:
			//Стрелка вверх: +0.1 к громкости
			if (video.volume < 1){
				//range.value += 0.01;
				video.volume += 0.1;
				document.cookie = "volume=" + video.volume;
				console.log('Громкость изменена: ' + video.volume);
			}
		break;
		case 40:
			//Стрелка вниз: -0.1 к громкости
			if (video.volume > 0){
				//range.value -= 0.01;
				video.volume -= 0.1;
				document.cookie = "volume=" + video.volume;
				console.log('Громкость изменена: ' + video.volume);
			}
		break;
	}
};

//Событие при изменении полноэкранного режима
video.addEventListener("webkitfullscreenchange", onFullScreenChange);
var fullscreen = false;
/*function timeoutFullScreenChange(){
	setTimeout(onFullScreenChange, 400);
}*/
function onFullScreenChange(){
	console.log('Изменён полноэкранный режим.');
	/*if (fullscreen == false){
		range.setAttribute('style', 'position: absolute; top: 50%; left: 50%; z-index: 2147483647;');
		fullscreen = true;
	}else{
		range.setAttribute('style', '');
		fullscreen = false;
	}*/
}
</script>