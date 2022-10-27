<?php
	include "session.php";
	require_once ('../config/config.php');

	$id = $_GET['id'];
	$form_table = $_SESSION['form_table'];
	$del = "delete from form_table_option where id like $id";
	$db->query($del);
	header('location: ../view/edit_form_table.php?id='.$form_table.'   ');
	$db->close();
	exit();