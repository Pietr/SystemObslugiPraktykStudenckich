<?php
	include "session.php";
	require_once "../config/config.php";

	$add_name = $_POST['add_name'];
	$add_address = $_POST['add_address'];
	$add_nip = $_POST['add_nip'];
	$del = 0;
	$query = "INSERT INTO `company`(`id`,`name`,`address`,`nip`,`del`)
	VALUES (NULL,'$add_name','$add_address','$add_nip','$del')";
	$db->query($query);
	header('location: ../view/company_admin.php');
	$db->close();
	exit();