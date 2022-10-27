<?php
	include "session.php";
	require_once "../config/config.php";
	
	$add_name = $_POST['add_name'];
	$add_username = $_POST['add_username'];
	$add_mail = $_POST['add_mail'];
	$add_password = md5($_POST['add_password']);
	$add_index = $_POST['add_index'];
	$add_type = 1;
	$query = "INSERT INTO `users`(`id`,`name`,`username`,`mail`,`password`,`role_type`,`index_number`)
	VALUES (NULL,'$add_name','$add_username','$add_mail','$add_password','$add_type','$add_index')";
	$db->query($query);
	echo $query;
	header('location: ../view/users_manager.php');
	$db->close();
	exit();