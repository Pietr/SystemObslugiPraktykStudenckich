<?php
	include "session.php";
	require_once ('../config/config.php');

	$id = $_GET['id'];
	$del = "delete from users where id like $id";
	$db->query($del);
	header('location: ../view/users_manager.php');
	$db->close();
	exit();