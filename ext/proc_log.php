<?php session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'on');
setlocale(LC_ALL, 'ru_RU.UTF-8');
#-------------------------------------------------

require_once 'connect.php';

if(!empty($_POST)) {
	$formEmail = $_POST['email'];
	$result = mysqli_query($conn,"SELECT id FROM reg WHERE email = '$formEmail'");
	$myrow = mysqli_fetch_array($result);
	if (empty($myrow['id'])) {
		setcookie('send-dont', "5", time() + 1, '/');
		header("Location: /../register.php");
		exit;
	}
}


