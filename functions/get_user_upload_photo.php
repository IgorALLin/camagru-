<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/camagru/config/setup.php';

$err_type = array('Bad file type', 'Too big file');

if (isset($_SESSION['upload'])){
	$photo = $_SESSION['upload'];

	if(!in_array($photo, $err_type)){
		$photo = '<img id="user_photo" src="'.$photo.'" alt ="=((">';
	}
	unset($_SESSION['upload']);
	echo $photo;
}


?>