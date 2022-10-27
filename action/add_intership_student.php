<?php
	include "session.php";
	require_once ('../config/config.php');

	$id = $_SESSION['id_intership'];
	$add_student = $_POST['add_student'];
	$update = "UPDATE internship SET id_student='$add_student' WHERE id LIKE '$id'";
	$db->query($update);
	header('location: ../view/intership_admin.php');
	$db->close();
	exit();