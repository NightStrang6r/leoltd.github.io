<?php

$OS = getOS();

if($OS == 'Android' || $OS == 'iPhone' || $OS == 'iPad' || $OS == 'BlackBerry' || $OS == 'Mobile'){
	echo '<script>document.location.href = "http://leoltd.zzz.com.ua/mobile.html";</script>';
}

?>