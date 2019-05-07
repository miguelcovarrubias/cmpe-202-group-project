<?php 
	$generic_path = "/var/www/html/cmpe-202-group-project/";
        echo "<h1> This is the home page </h1> <br>";
	//include "createUser.php";
	session_start();

	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE){
		echo "You are logged in. <br>";
		echo "<a href = 'cmpe-202-group-project/php_card_starter/register.php' > Sign Up </a> <br>";
		echo "<a href = 'cmpe-202-group-project/php_card_starter/menu.php' > Menu </a> <br>";
	}
	else {
		echo "<a href = 'cmpe-202-group-project/php_card_starter/login.php' > Login </a> <br>";
		echo "<a href = 'cmpe-202-group-project/php_card_starter/register.php' > Sign Up </a> <br>";
	
	}
	
?>

