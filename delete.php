<?php
/*
	Wi-Cloud - Project by Nitishkumar
	Email - nitishkumar.blog@gmail.com
	Telegram - https://t.me/cyberking3
	Instagram - https://www.instagram.com/_cyber_king_003_
	Github - https://github.com/iamnkumar
*/
	$fileName = $_GET['name'];
	$filePath = 'storage/'.$fileName;
	if ( file_exists($filePath) ) {
	unlink($filePath);
	header('Location:/view.php');}
?>