<?php
	include "session.php";
	require_once ('../config/config.php');

	$id = $_GET['id'];
	$del = "delete from internship where id like $id";
	$db->query($del);
	header('location: ../view/intership_admin.php');
	$db->close();
	exit();