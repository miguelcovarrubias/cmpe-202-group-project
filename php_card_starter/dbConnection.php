<?php
$conn = mysqli_connect("localhost", "username", "password", "db_name");

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
?>
