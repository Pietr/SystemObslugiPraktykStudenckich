<?php
	include "session.php";
	require_once ('../config/config.php');

	$id = $_GET['id'];
	$pass = substr(md5(date("Y.m.d.H.i.s").rand(1,12345678)) , 0 , 10);
	$new_password = md5($pass);

	$update = "UPDATE users SET password='$new_password' WHERE id LIKE '$id'";
	$db->query($update);

	//$_SESSION['alert'] = '<div class="alert alert-warning alert-dismissible fade show">Wygenerowane hasło dla użytkownika: <b>'.$pass.'</b></div>';
	$_SESSION['alert'] ='
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
	  <strong>Wygenerowano nowe hasło: </strong> '.$pass.'
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>';

	header('location: ../view/users_manager.php');


	$db->close();
	exit();