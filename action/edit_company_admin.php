<?php
	include "session.php";
	require_once ('../config/config.php');

	$id_company = $_SESSION['id_company'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$nip = $_POST['nip'];
	
	$update = "UPDATE company SET name='$name', address='$address', nip='$nip' WHERE id LIKE '$id_company'";
	$db->query($update);
	header('location: ../view/company_admin.php');
	$db->close();
	exit();