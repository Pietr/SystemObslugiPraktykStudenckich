<?php
	include "session.php";
	require_once ('../config/config.php');
	$id = $_GET['id'];
	$del = "delete from form where id like $id";
	$db->query($del);
	header('location: ../view/form_admin.php');
	$db->close();
	exit();