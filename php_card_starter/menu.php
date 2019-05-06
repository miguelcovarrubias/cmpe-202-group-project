<?php
	$conn = mysqli_connect("localhost", "user1", "password1", "cmpe202");
	// Check connection
	if ($conn->connect_error) {
	    	die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	
	//The above code will be replaced with the dbConnection.php, once the db
	// has been set up
	try{
		$createMenu = "CREATE TABLE IF NOT EXISTS beverage_menu (beverage_name varchar(40) NOT NULL);";
		mysqli_query($conn, $createMenu);
	} catch(Exception $e){
		$e->getMessage();
	}
