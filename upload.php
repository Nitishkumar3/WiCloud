<?php
/*
	Wi-Cloud - Project by Nitishkumar
	Email - nitishkumar.blog@gmail.com
	Telegram - https://t.me/cyberking3
	Instagram - https://www.instagram.com/_cyber_king_003_
	Github - https://github.com/iamnkumar
*/
if(isset($_POST) && $_SERVER['REQUEST_METHOD'] == "POST")
{
	$vpb_file_name = strip_tags($_FILES['upload_file']['name']);
	$vpb_file_id = strip_tags($_POST['upload_file_ids']);
	$vpb_file_size = $_FILES['upload_file']['size'];
	$vpb_uploaded_files_location = 'storage/';
	$vpb_final_location = $vpb_uploaded_files_location . $vpb_file_name;
	if(move_uploaded_file(strip_tags($_FILES['upload_file']['tmp_name']), $vpb_final_location))
	{
		echo $vpb_file_id;
	}
	else
	{
		echo 'general_system_error';
	}
}
?>