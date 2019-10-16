<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
setlocale(LC_ALL, 'ru_RU.UTF-8');
#-------------------------------------------------

$conn = new mysqli("localhost", "root", "root", "test");

if ($conn->connect_error) {
	die("Ошибка: не удается подключиться: " . $conn->connect_error);
}

//echo 'Подключение к базе данных.<br>';

