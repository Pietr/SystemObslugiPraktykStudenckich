<?php
	include "session.php";
	require_once "../config/config.php";
	$add_name = $_POST['add_name'];
	$add_patron = $_POST['add_patron'];
	$add_start = $_POST['add_start'];
	$add_end = $_POST['add_end'];
	$add_company = $_POST['add_company'];
	$add_content = $_POST['add_content'];
	$add_hours = $_POST['add_hours'];

	$add_student = 0;
	$add_status = 1;

	$del = 0;



	$query = "INSERT INTO `internship`(`id`,`name`,`content`,`status`,`start_date`,`end_date`,`company`,`id_student`,`id_patron`,`hours`)
	VALUES (NULL,'$add_name','$add_content','$add_student','$add_start','$add_end','$add_company','$add_student','$add_patron','$add_hours')";
	$db->query($query);
	echo $query;
	header('location: ../view/intership_admin.php');

	$db->close();
	exit();
