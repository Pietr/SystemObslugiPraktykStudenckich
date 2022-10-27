<?php
	include "session.php";
	require_once ('../config/config.php');
	$id = $_GET['id'];
	$new = 1;
	$update = "UPDATE company SET del='$new' WHERE id LIKE '$id'";
	$db->query($update);
	header('location: ../view/company_admin.php');
	$db->close();
	exit();