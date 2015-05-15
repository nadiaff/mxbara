<?php

	$servername = $_SERVER['DB_HOST'];
	$username = $_SERVER['DB_LOGIN']; 
	$password = $_SERVER['DB_PASSWD'];
	$dbname = $_SERVER['DB_DB'];

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>