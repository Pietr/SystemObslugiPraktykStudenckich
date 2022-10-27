<?php
	include "session.php";
	require_once "../config/config.php";

	$form_id = $_SESSION['form_id'];
	$user_id = $_SESSION['user_id'];
	$query = "SELECT * FROM form_table where id_form like $form_id";
	$result = $db->query($query);
	$row = $result->num_rows;
	for ($x=0; $x < $row; $x++) {
		$array = $result->fetch_assoc();
		$id_cat = $array['id'];
		$value = $_POST[$id_cat];
		$query = "INSERT INTO `form_value`(`id`,`id_form`,`id_user`,`id_form_table`,`id_form_option`)
		VALUES (NULL,'$form_id','$user_id','$id_cat','$value')";
		$db->query($query);
		echo $query;
	}

	$query2 = "INSERT INTO `form_finish`(`id`,`id_form`,`id_user`)
	VALUES (NULL,'$form_id','$user_id')";
	$db->query($query2);
	header('location: ../view/form.php');
	$db->close();
	exit();