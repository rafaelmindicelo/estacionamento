<?php

	$host = "localhost";
	$data = "estacionamento";
	$user = "root";
	$pass = "";
	$mysqli = new mysqli($host, $user, $pass, $data);
	if ($mysqli->connect_error) {
		printf("ERRO MySQLi: %s\n", $mysqli->connect_error);
		exit();
	}
?>