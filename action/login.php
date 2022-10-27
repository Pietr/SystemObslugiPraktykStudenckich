<?php
	include "session.php";
	require_once "../config/config.php";

	$username = htmlentities($_POST['username'], ENT_QUOTES, "UTF-8");
	$password = md5($_POST['password']); 
	if ($result = $db->query(sprintf("SELECT * FROM users WHERE username='%s'",mysqli_real_escape_string($db,$username))))
	{
		$number_result = $result->num_rows;
		if($number_result==1) {
			$array = $result->fetch_assoc();
			$query_login = "SELECT * FROM users WHERE username like '$username'";
			$result_login = $db->query($query_login);
			$array_login = $result_login->fetch_assoc();
			$password_user = $array_login['password'];
			if ($password==$password_user) {
				$disabled = $array_login['disabled'];
				if ($disabled==1){
					header('location: ../view/login.php?alert=1');
					exit();		
				}
				$_SESSION['user_id'] = $array_login['id'];
				$_SESSION['user_username'] = $array_login['username'];
				$_SESSION['user_name'] = $array_login['name'];
				$_SESSION['user_type'] = $array_login['role_type'];
				$_SESSION['session_active'] = "1";
				echo "ZALOGOWANY";
				header('location: ../view/main.php');
			}else{
				 header('location: ../view/login.php?alert=2');
			}
		}else{
			header('location: ../view/login.php?alert=1');
		}
	}else{
		header('location: ../view/login.php?alert=4');
	}
	$db->close();
	exit();