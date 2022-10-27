<?php
	include "session.php";
	require_once "../config/config.php";
	
	$add_name = $_POST['add_name'];
	$form_table = $_SESSION['form_table'];
	$query = "INSERT INTO `form_table`(`id`,`id_form`,`name`)
	VALUES (NULL,'$form_table','$add_name')";
	$db->query($query);
	header('location: ../view/edit_form_admin.php?id='.$form_table.'   ');
	$db->close();
	exit();