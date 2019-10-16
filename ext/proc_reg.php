<?php session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'on');
setlocale(LC_ALL, 'ru_RU.UTF-8');
#-------------------------------------------------

require_once 'connect.php';

if(!empty($_POST)) {
	$name_reg = htmlentities(mysqli_real_escape_string($conn, $_POST['name_reg']));

	$formEmail = $_POST['email'];
	$result = mysqli_query($conn,"SELECT id FROM reg WHERE email = '$formEmail'");
	$myrow = mysqli_fetch_array($result);
	if (!empty($myrow['id'])) {
		setcookie('send-double', "4", time() + 1, '/');
		header("Location: /../register.php");
		exit;
	}

	if (!preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i', $_POST['email'])) {
		setcookie('send', "1", time() + 1, '/');
		header("Location: /../register.php");
		exit;
	} else {
		$email = $_POST['email'];
	}

	if ($_POST['password1'] != $_POST['password2']) {
		setcookie('send-passwd', "2", time() + 1, '/');
		header("Location: /../register.php");
		exit;
	}elseif (strlen($_POST['password1']) < 6) {
		setcookie('send-count', "3", time() + 1, '/');
		header("Location: /../register.php");
		exit;
	}else{
		$password = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));
		$hash = password_hash($password, PASSWORD_DEFAULT);
	}

	$query = "INSERT INTO reg (name_reg, email, password) VALUES ('$name_reg', '$email', '$hash')";
	$result = mysqli_query($conn, $query);

	header("Location: /../register.php");
	exit;
}
?>



