<!DOCTYPE html>

<?php
if(isset($_POST['submit'])){
	if(isset($_POST['email']) && isset($_POST['message'])){
		//Проверка на корректность мыльца
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		
			//Перевод в переменные для более удобного использования
			$to = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$count = $_POST['count'];
			$headers = 'From: leoltd@leoltd.zzz.com.ua' . "\r\n";
			
			//Прописываем стандартные значения
			if($subject == ''){
				$subject = 'Email from leoltd.zzz.com.ua';
			}
			if($count == ''){
				$count = 1;
			}
			
			//Отправляем письмо определённое кол-во раз
			if($count > 1){
				for($i = 1; $i <= $count/2; $i++){
					mail($to, $subject, $message, $headers);
				}
				$headers = 'From: info@leoltd.zzz.com.ua' . "\r\n";
				for($i = 1; $i <= $count/2; $i++){
					mail($to, $subject, $message, $headers);
				}
			}else{
				for($i = 1; $i <= $count; $i++){
					mail($to, $subject, $message, $headers);
				}
			}
			
			
			//Выподим инфу
			echo "Письмо было отправлено на адрес " . $_POST['email'] . ".";
			
		}else{
			echo "Адрес указан неправильно.";
		}
	}else{
		echo "Все обязательные поля должны быть заполнены!";
	}
}
?>

<style>
b{
	color: red;
}
.cbalink {
	display: none;
}
</style>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>MailTo</title>
	</head>
	<body>
		<form action="" method="post">
			<table border="0">
				<tr>
					<td>Email:</td>
					<td><input type="text" name="email" id="email" required placeholder="Обязательное поле" onkeyup="javascript:buttonUpdate();" /><b>*</b></td>
				</tr>
				<tr>
					<td>Тема:</td>
					<td><input type="text" name="subject" placeholder="Тема письма"/></td>
				</tr>
				<tr>
					<td>Сообщение:</td>
					<td><textarea rows="5" name="message" cols="30"></textarea><b>*</b></td>
				</tr>
				<tr>
					<td>Количество сообщений:</td>
					<td><input type="text" name="count" placeholder="Кол-во отправляемых писем"/></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" id="submit" value="Отправить на адрес" /></td>
					<td><input type="submit" value="Сбросить" onclick="reload();" /></td>
				</tr>
			</table>
		</form>
	</body>
</html>

<script>
var button = document.getElementById('submit');
var email = document.getElementById('email');
	
function buttonUpdate(){
	//button.setAttribute('value', 'Отправить на адрес ' + email.value);
};
function reload(){
	document.location.href = "mail.php";
};
</script>		