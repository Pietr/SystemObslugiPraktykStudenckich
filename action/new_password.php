<?php
	include "session.php";
	require_once "../config/config.php";

	$password_1 = $_POST['password_1'];
	$password_2 = $_POST['password_2'];
	$id = $_SESSION['user_id'];

	if ($password_1==$password_2){	
		$password = md5($password_1); 
		$query = "UPDATE users set password='$password' where id like '$id'";
		$db->query($query);
		
		$_SESSION['alert'] = '<div class="alert alert-success" role="alert">Hasło zostało pomyślnie zmienione.</div>';
		header('location: ../view/password.php');			
	}else{
	  $_SESSION['alert'] = '<div class="alert alert-danger">Hasła różnią się.</div>';
	  header('location: ../view/password.php');			
	}
	$db->close();
	exit();