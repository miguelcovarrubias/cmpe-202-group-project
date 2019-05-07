<?php
	//This file is tmeporary, I was just using it to set up db locally
	$conn = mysqli_connect("localhost", "username", "password", "cmpe202");
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	//The above code will be replaced with the dbConnection.php, once the db has been set up
	
	//Setup the beverage names table
	try{
		$createMenu = "CREATE TABLE IF NOT EXISTS beverage_menu (beverage_name varchar(40) NOT NULL);";
		mysqli_query($conn, $createMenu);
	} catch(Exception $e){
		$e->getMessage();
	}
	
	//Set up the table for beverage sizes
	try{
		$createSize = "CREATE TABLE IF NOT EXISTS beverage_size_price (beverage_size varchar(40) NOT NULL, price double NOT NULL);";
		mysqli_query($conn, $createSize);
	} catch(Exception $e){
		$e->getMessage();
	}

	//Set up the table for beverages temp
	try{
		$createTemp = "CREATE TABLE IF NOT EXISTS beverage_options (name varchar(40) NOT NULL);";
		mysqli_query($conn, $createTemp);
	} catch(Exception $e){
		$e->getMessage();
	}
