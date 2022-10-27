<?php
	include "session.php";
	require_once ('../config/config.php');

	$id = $_GET['id'];
	$form_table = $_SESSION['form_table'];
	$del = "delete from form_table where id like $id";
	header('location: ../view/edit_form_admin.php?id='.$form_table.'   ');
	$db->close();
	exit();