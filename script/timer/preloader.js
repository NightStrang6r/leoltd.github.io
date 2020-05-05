var preloader = document.getElementsByClassName('indexload_animation')[0];

preloader.style = 'height: ' + window.innerHeight + 'px; width: ' + window.innerWidth + 'px;';
function preloaderAnimation(){
	$("#indexload_animation").fadeOut(1000);
}
setTimeout(preloaderAnimation, 100);
