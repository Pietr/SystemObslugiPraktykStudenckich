<?php
	include "session.php";
	require_once "../config/config.php";

	$add_name = $_POST['add_name'];
	$form_table = $_SESSION['form_option'];
	$query = "INSERT INTO `form_table_option`(`id`,`id_form_table`,`name`)
	VALUES (NULL,'$form_table','$add_name')";
	$db->query($query);
	header('location: ../view/edit_form_table.php?id='.$form_table.'   ');
	$db->close();
	exit();