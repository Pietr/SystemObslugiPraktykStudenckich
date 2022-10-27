<?php
session_start();
require_once ('../config/config.php');
$time = $_SERVER['REQUEST_TIME'];
if (isset($_SESSION['LAST_ACTIVITY']) && ($time - $_SESSION['LAST_ACTIVITY']) > $session_timeout) {
    session_unset();
    session_destroy();
	header('location: ../index.php?alert=2');
}
$_SESSION['LAST_ACTIVITY'] = $time;
?>