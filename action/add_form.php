<?php
include "session.php";
require_once "../config/config.php";

	$add_name = $_POST['add_name'];
	$user = $_SESSION['user_id'];
	$enable = 0;
	$query = "INSERT INTO `form`(`id`,`name`,`author_id`,`enable`)
	VALUES (NULL,'$add_name','$user','$enable')";
	$db->query($query);
	header('location: ../view/form_admin.php');
	$db->close();
	exit();