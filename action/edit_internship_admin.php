<?php
	include "session.php";
	require_once ('../config/config.php');

	$id_internship = $_SESSION['id_internship'];
	$name = $_POST['name'];
	$content = $_POST['content'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	$patron = $_POST['patron'];
	$student = $_POST['student'];
	$company = $_POST['company'];
	$statuses = $_POST['statuses'];
	$hours = $_POST['hours'];
	
	$update = "UPDATE internship SET name='$name', content='$content', status='$statuses', start_date='$start_date', end_date='$end_date', company='$company', id_student='$student', id_patron='$patron', hours='$hours' WHERE id LIKE '$id_internship'";
	$db->query($update);
	header('location: ..\view\intership_admin.php');
	$db->close();
	exit();