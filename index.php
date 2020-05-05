<?php
    include 'php/loadIntro.php';
	include 'php/getVisitorData.php';
	include 'php/mobile.php';
	include 'php/getDate.php';
?>
<!DOCTYPE html>
<html lang="ru" class="no-js">
	<head>
		<link href="css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" />
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
		<script type="text/javascript" src="http://www.xiper.net/examples/js-plugins/gallery/lightbox/js/jquery.lightbox-0.5.js"></script>
		<!--<script type="text/javascript" src="js/mobile.js"></script>-->
        <script type="text/javascript">
            /*if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile/i.test(navigator.userAgent) ) {
                document.location.href = "http://leoltd.zzz.com.ua/mobile.html";
            }*/
        </script>
		
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Leonid Tsaruk - Web Developer</title>
		<meta name="description" content="Leonid Tsaruk - Web Develper" />
		<meta name="keywords" content="leo, leonid, tsaruk, Leonid Tsaruk - Web Develper" />

        <link rel="shortcut icon" href="img/leo.jpg" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/preloader.css" />
		<link rel="stylesheet" href="css/neotext.css" />
		<?
			include 'php/animationBackgrnd.php';
		?>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/all.css" />
		
		<!--<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800|Clicker+Script' rel='stylesheet' type='text/css'>-->
		<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'>
		
	</head>
	
	
	<body>
		<script src="js/waterMarkDeleter.js"></script>
		
		<div class="indexload_animation" id="indexload_animation" style="">
			<div class="cssload">
				<div class="cssload-loader">Leo Co., Ltd.</div>
			</div>
		</div>
		<script src="js/preloader.js"></script>
		
		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas" onmouseover="ShowText('none');"></canvas>
					
					<a id="animation_img" href="img/leo.jpg" >
						<img src="img/leo.jpg" class="main-title" style="width: 200px; top: 25%; border-radius: 100px;"  />
					</a>
					<div class="titles">
						<h1 class="main-title" id="animation_title">Leonid<span class="thin">  Tsaruk</span></h1>
					
						<h1 class="second-title" id="animation_second_title">Web-Developer</h1>
					</div>
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

					<div class="wrapper" id="animation_wrapper">
						<ul style="width: 100%;">
							<li id="animation_wrapper_1" onmouseover="ShowText('vk');" onclick="window.open('https://vk.com/lenyatsaruk');"><i class="fa fa-vk" aria-hidden="true"></i></li>
							<li id="animation_wrapper_2" onmouseover="ShowText('instagram');" onclick="window.open('https://www.instagram.com/nightstranger.leo');"><i class="fa fa-instagram" aria-hidden="true"></i></li>
							<li id="animation_wrapper_3" onmouseover="ShowText('steam');" onclick="window.open('https://steamcommunity.com/id/nightstranger_leo');"><i class="fa fa-steam" aria-hidden="true"></i></li>
							<li id="animation_wrapper_4" onmouseover="ShowText('mail');" onclick="window.open('mail.html');"><i class="fa fa-envelope" aria-hidden="true"></i></li>
							<li id="animation_wrapper_5" onmouseover="ShowText('skype');" onclick="document.location.href = 'skype:dggjdraw2345'"><i class="fa fa-skype" aria-hidden="true"></i></li>
							<li id="animation_wrapper_6" onmouseover="ShowText('discord');" onclick="window.open('https://discord.gg/tJnHMWd');"><img width="40" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAO5SURBVGhD7VlJTxRRECZGjRc9m3jz6i/w5j/wrAcTT3rXO2cZQNEQBelhE5BFFmUnCgISQVyQIAgIGEF2ENm391llv8k0Tc0wkNeMxPmSLzPd9bqqvnnv1avOxMUQQwwxxMVn4lSSX91ItFQ5sSPRQudh0edX7Yl+Veqz1PX4IpzUKe0fyRbOk6O+RD8QdVqqKylLndOpRQ6eCXq4X3QaLVrqY3w8jusUI4MvQ90UnUWZCX51VacYGf7uCcFRtEn7JlenGBnogRbJUdRpqUadYmT4V4VwXjrFyBAT4jEPTUh6IVDxEkjOku33soGqJiCrTLbvRU+FpOYBzZ3A3ALQP0yJvgasEiC/EihrACop8VL65Gu+X9sCDH63xzd1AA+eyH4leiakrhVYWQP6hoCaZqC7H1hYRFjMk4Cur0A1Ce4fAZZX7O+Sfzc9EfL8FbC1DQz9AGbmdZb7xOQMMDwKbJOfZ/VyHCc9ETI5q7MxhJ9TchwnjQspqdPRDSPvhRwvQONCBmizeoEvg3K8AI0K4SqztaUjG8b6hl2ipbhMo0J4k4cDF4Bw4I0dDrxspbhMo0I+9eqIAtjGv2h60e5KxhXq0VPb3jOgbwro+CzHZRoVMj2nI7qwSueJc1nwYehEYXXQdj8X2NjUBhfGJoPj3DQm5C4lGmppjE/vHMuz4kRq/k77bIizh/eJc5yTxoRkl+toAviEZ6GBsXzAOVFQFbSl5ISeEcbj4uBYJ40J4YYwHN732A3jwwJgynVgjtOBx7PC9q4+fTMEimp2x2YaE9LQpiNpSL8qLw2l9IULvCw3yO6G20819W1SfGNCWj/oSBrcwXIFkpKLBGvrcqPZ2L47NtOYED4MRyd0NI2FJbv211Mn3PsN+PVbG0KAu18+wWuonefKtrSsDRojY/YekuIbE8LkDd1Otd5dvXqplc+tsMdweeWqlUPFgTc5Fwl+6Uqh+2znnsrd5nC38IZmPNRLGdOokAA50XfdO5cFz1ZSpjw+QE50gkp1APM0g2+77MNSGu+kJ0Kc5CpVXGt/SnY3OWmuTO6zZS96LuSwGBPyr/G/FlIiOYo29y0kyVLXJEdekpKclu47uW8h/IcKPdQuOfOOqpR4m7gp2w8ghJGQibPktE1y6AkttXonQ532ZeISJTwhjTmQEAbNzLEEv7pMDtJ8lqoiYQ1eMiFDXeS4/H8hCWs1JiSaSEvDCRKXcuSFBEAzc4UELB55IYzkLHWBZqfvyAthpOSqM7RPb+nLGGI4HMTF/QFOmzb1+LgTUgAAAABJRU5ErkJggg=="></li>
						</ul>
					</div>
					<p id="digital_watch" style="top: 90%; left: 90%;position: absolute; color: #f9f1e9; font-size: 23px; font-family: 'Raleway', Calibri, Arial, sans-serif; display: none;"></p>
					<p id="text" style="top: 96%; left: 1%; position: absolute; color: #f9f1e9; font-size: 14px;"></p>
					
					<div id="animation_timer" style="display: none; top: 90%; left: 4%; position: absolute;">
						<div class="container">
							<div class="text"></div>
						</div>
						<!--<p style="color: #f9f1e9; font-size: 120%; font-family: 'Raleway', Calibri, Arial, sans-serif;">До лета осталось:</p>
						<span id="t" style="color: #f9f1e9; font-size: 120%; font-family: 'Raleway', Calibri, Arial, sans-serif;"></span>-->
					</div>
					
				</div>
			</div>
		</div>
		<script>
			var timeend = new Date(<?echo $d[0];?>);
		</script>
		<script src="js/TweenLite.min.js"></script>
		<script src="js/EasePack.min.js"></script>
		<script src="js/rAF.js"></script>
		<script src="js/demo-1.js"></script>
		<script src="js/animation.js"></script>
		<script src="js/clock.js"></script>
		<script src="js/test.js"></script>
		<script src="js/neotext.js"></script>
		<script src="js/noCopy.js"></script>
		<script src="js/WHO_ARE_YOU.js"></script>
		<!--<script src="js/timer.js"></script>-->
		<script type="text/javascript">
		document.oncontextmenu=function(e){return false};
		jQuery(function(){
			jQuery("a").lightBox({
				overlayBgColor: '#FFF',
				overlayOpacity: 0.6,
				//imageLoading: 'img/loading.gif',
				//imageBtnClose: 'img/close.gif',
				//imageBtnPrev: 'img/prev.gif',
				//imageBtnNext: 'img/next.gif',
				//containerResizeSpeed: 350
			});
		});
		</script>
		
		
	</body>

</html>	