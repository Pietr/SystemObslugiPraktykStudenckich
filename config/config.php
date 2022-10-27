<?php
$session_timeout = 15 * 60; //czas trwania sesji

$host = 'host';
$database = 'dbname';
$username = 'dbusername';
$password = 'password';

@ $db = new mysqli($host,$username,$password,$database);
if ($db -> connect_errno) {
  echo "Failed to connect to MySQL: " . $db -> connect_error;
  exit();
}
$db-> query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");