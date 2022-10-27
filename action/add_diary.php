<?php
	include "session.php";
	require_once "../config/config.php";

	$id_diary = $_SESSION['id_diary'];
	$add_date = $_POST['add_date'];
	$add_time = $_POST['add_time'];
	$add_info = $_POST['add_info'];
	$add_content = $_POST['add_content'];
	$user_id = $_SESSION['user_id'];
	$query = "INSERT INTO `diary`(`id`,`id_internship`,`id_user`,`time`,`date_diary`,`info`,`content`)
	VALUES (NULL,'$id_diary','$user_id','$add_time','$add_date','$add_info','$add_content')";
	$db->query($query);
	header('location: ../view/diary.php?id='.$id_diary.'   ');
	$db->close();
	exit();