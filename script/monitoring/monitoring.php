<?php
    $mail = false;
	
    $ip = $_SERVER['REMOTE_ADDR'];
    $date = date("j.n.Y");
	$time = date("H:i:s");
    $browser = getBrowser();
    $os = getOS();
	$location = $_GET['location'];
	$alreadywas = $_GET['alreadywas'];
        
    setcookie('ip', $ip);
        
    $to = "tsaruk-2015@mail.ru";
    $subject = "MonitoringJS: новый пользователь зашел на сайт!";
		
    $message = "Новый пользователь зашел на сайт!\n"."\nSite: ".$location."\nDate: ".$date."\nTime: ".$time."\nIp: ".$ip."\nBrowser: ".$browser."\nOS: ".$os;
    $headers = 'From: info@leoltd.zzz.com.ua' . "\r\n";
	
	if($alreadywas == 1){
		$subject = "MonitoringJS: пользователь опять зашел на сайт!";
		$message = "Пользователь опять зашел на сайт!\n"."\nSite: ".$location."\nDate: ".$date."\nTime: ".$time."\nIp: ".$ip."\nBrowser: ".$browser."\nOS: ".$os;
		
		$alreadywas = "alreadywas";
	}else{
		$alreadywas = "newuser";
	}
	
	if($mail == true){
		mail($to, $subject, $message, $headers);
	}
	
	//Подключаем DB
	$db = new mysqli('mysql.zzz.com.ua','leoltd','11212003LeoLeo','leoltd');
	$db->query('SET NAMES "utf8"');
	
	//Вписываем данные в DB
	if($stmt=$db->prepare('insert into monitoringjs (site, newuser, date, time, ip, browser, os) values (?,?,?,?,?,?,?)')){
		$stmt->bind_param('sssssss', $location, $alreadywas, $date, $time, $ip, $browser, $os);
		$stmt->execute();
	}
	
	echo $message;

	function getBrowser () {
        $user_agent = $_SERVER["HTTP_USER_AGENT"];
        if (strpos($user_agent, "Firefox") !== false) $browser = "Firefox";
			elseif (strpos($user_agent, "Opera") !== false) $browser = "Opera";
			elseif (strpos($user_agent, "Chrome") !== false) $browser = "Chrome";
			elseif (strpos($user_agent, "MSIE") !== false) $browser = "Internet Explorer";
			elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari";
			else $browser = $user_agent;
		return $browser;
    }
    function getOS() {
        $user_agent = $_SERVER["HTTP_USER_AGENT"];
        $os_platform = $user_agent;
		
        $os_array = array(
                '/windows nt 10/i'     =>  'Windows 10',
                '/windows nt 6.3/i'     =>  'Windows 8.1',
                '/windows nt 6.2/i'     =>  'Windows 8',
                '/windows nt 6.1/i'     =>  'Windows 7',
                '/windows nt 6.0/i'     =>  'Windows Vista',
                '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                '/windows nt 5.1/i'     =>  'Windows XP',
                '/windows xp/i'         =>  'Windows XP',
                '/windows nt 5.0/i'     =>  'Windows 2000',
                '/windows me/i'         =>  'Windows ME',
                '/win98/i'              =>  'Windows 98',
                '/win95/i'              =>  'Windows 95',
                '/win16/i'              =>  'Windows 3.11',
                '/macintosh|mac os x/i' =>  'Mac OS X',
                '/mac_powerpc/i'        =>  'Mac OS 9',
                '/linux/i'              =>  'Linux',
                '/ubuntu/i'             =>  'Ubuntu',
                '/iphone/i'             =>  'iPhone',
                '/ipod/i'               =>  'iPod',
                '/ipad/i'               =>  'iPad',
                '/android/i'            =>  'Android',
                '/blackberry/i'         =>  'BlackBerry',
                '/webos/i'              =>  'Mobile'
            );

        foreach ($os_array as $regex => $value) { 
        
            if (preg_match($regex, $user_agent)) {
                $os_platform    =   $value;
            }
      
        }   
        
        return $os_platform;
		
    }
?>