<?
setcookie('intro', 'true');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Revolt Group</title>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
		<link rel="stylesheet" type="text/css" href="css/intro.css" />
		<link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
		<span id="animation_out">
			
		</span>
	</head>
	<style>
	.cbalink{
		display: none;
	}
	@font-face {
		font-family: Compagnie; 
		src: url(fonts/Compagnie.ttf);
	}
	#text2{
		display: none;
		text-anchor: middle;
		font-size: 130px;
		font-family: 'Major Mono Display', monospace;
		stroke-width: 3;
		stroke-dasharray: 1200;
		stroke-dashoffset: 0;
		position: absolute;
		top: 60%;
		left: 55%;
	}
	.dud {
	  color: #757575;
	}
	</style>
	<body>
		<script src="js/waterMarkDeleter.js"></script>
		
		<script src='http://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js'></script>
		<script src="js/intro.js"></script>

		<div class="container">
			<div class="text" id="text2">Group</div>
		</div>
	</body>
</html>
<script>
document.oncontextmenu=function(e){return false};

window.onkeydown = function (e) {
	console.log(e.keyCode);
	goTo();
};

function animation(){
	$("#text2").fadeIn(2000);
}

function animationOut(){
	var animation = document.getElementById('animation_out');
	animation.innerHTML = '<link rel="stylesheet" type="text/css" href="css/animation_backgrnd_out.css" />';
}

function goTo(){
	document.location.href = "http://leoltd.zzz.com.ua";
}
setTimeout(animation, 4000);
setTimeout(animationOut, 6000);
setTimeout(goTo, 9000);
</script>
<script src="js/neotextforintro.js"></script>
<script src="js/noCopy.js"></script>