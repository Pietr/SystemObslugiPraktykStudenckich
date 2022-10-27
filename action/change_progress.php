<?php
	include "session.php";
	require_once ('../config/config.php');
	$id = $_GET['id'];
	$new = 2;
	$update = "UPDATE internship SET status='$new' WHERE id LIKE '$id'";
	$db->query($update);
	header('location: ../view/main_manager.php');
	$db->close();
	exit();