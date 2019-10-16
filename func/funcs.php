<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
setlocale(LC_ALL, 'ru_RU.UTF-8');
#-------------------------------------------------

function save_mess(){
	if(isset($_POST['name']) && isset($_POST['text'])) {
		$name = htmlentities(mysqli_real_escape_string($conn, $_POST['name']));
		$text = htmlentities(mysqli_real_escape_string($conn, $_POST['text']));

		$query = "INSERT INTO messages (name, text) VALUES ('$name', '$text')";
		$result = mysqli_query($conn, $query);

		$_SESSION['good'] = $result;
	}
}
