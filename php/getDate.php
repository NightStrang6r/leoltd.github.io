<?php

$date_file = 'date.txt';
if(isset($_GET['date'])){
	$writedata = fopen($date_file,"w");
	fputs($writedata,$_GET['date']);
	fclose($writedata);
}
$d = file($date_file);
	
?>