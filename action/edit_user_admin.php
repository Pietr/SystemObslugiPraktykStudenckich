<?php
	include "session.php";
	require_once ('../config/config.php');

	$id_user = $_SESSION['id_user'];
	$name = $_POST['name'];
	$index_number = $_POST['index_number'];
	$username = $_POST['username'];
	$mail = $_POST['mail'];
	$role_type = $_POST['role_type'];
	
	$update = "UPDATE users SET name='$name', index_number='$index_number', username='$username', mail='$mail', role_type='$role_type' WHERE id LIKE '$id_user'";
	$db->query($update);
	header('location: ../view/users_admin.php');
	$db->close();
	exit();