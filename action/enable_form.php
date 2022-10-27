<?php
	include "session.php";
	require_once ('../config/config.php');
	$id = $_GET['id'];
	$new = 1;

	$update = "UPDATE form SET enable='$new' WHERE id LIKE '$id'";
	$db->query($update);
	header('location: ../view/form_admin.php');

	$db->close();
	exit();