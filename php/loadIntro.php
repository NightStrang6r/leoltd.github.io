<?php

if($_COOKIE['was'] != 'true'){
	setcookie('was','true',time()+86400);
	echo '<script>document.location.href="intro.php"</script>';
}
if($_COOKIE['intro'] == 'true'){
	setcookie('intro','false');
	$intro = 'true';
}
	
?>