<?php
	//require_once('dbConnection.php');
	//include_once('userSession.php');
	echo "This is part is still in progress, if any one has working code for this part go right ahead, even replace this file with call to your own. <br>";
	
	//if user isn't logged in don't show anything

	//else
	if(isset($_POST['insertOrder'])){
		extract($_POST);
		echo "You have selected ->".$selectedBev."<- as your beverage.<br>";
		echo "With the ->".$selectedSize."<- size.<br>";
		echo "And, you would like it ->".$selectedTemp."<-.<br>";	
	}
