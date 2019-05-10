<?php
	require_once('dbConnection.php');
	include_once('userSession.php');
	
	try{
		$createOrderStatus = "CREATE TABLE IF NOT EXISTS orders_status (order_id int(8) NOT NULL AUTO_INCREMENT, user_id int(8) NOT NULL, is_done varchar(6) DEFAULT 'false', total_price_amount double, PRIMARY KEY (order_id));";
		mysqli_query($conn, $createOrderStatus);
	} catch(Exception $e){
		$e->getMessage();
	}

	try{
		$createOrdersDescriptions = "CREATE TABLE IF NOT EXISTS orders_description (order_id int(8) NOT NULL, beverage_name varchar(40) NOT NULL, price double, cup_size varchar(40), other_options varchar(40));";
		mysqli_query($conn, $createOrdersDescriptions);
	} catch(Exception $e){
		$e->getMessage();
	}

	//if user isn't logged in don't show anything
    // TODO
	//else

    $user_name = $_SESSION['name'];
    if(isset($user_name)) echo "Hello, ".$user_name;


	if(isset($_POST['insertOrder'])){
		extract($_POST);
        $nextOrderIdQuery = "SELECT AUTO_INCREMENT as next_id FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'starbucks' AND TABLE_NAME = 'orders_status'";
        $nextOrderIdQueryResult = $conn->query($nextOrderIdQuery);

        $nextOrderId = "";

        if ($result = $conn->query($nextOrderIdQuery)) {

            /* fetch associative array */
            while ($row = $result->fetch_assoc()) {
                $nextOrderId = $row["next_id"];
            }

            /* free result set */
            $result->free();
        }
        $cup_price_size = explode(",", str_replace(" ","", str_replace("$","" , ".$selectedSize.")));
        $cup_price_size = str_replace(".", "", $cup_price_size);
        $insertOrderDescription = "INSERT INTO orders_description (order_id,beverage_name, price, cup_size, other_options) VALUES ('$nextOrderId','$selectedBev', '$cup_price_size[0]', '$cup_price_size[1]' ,'$selectedTemp')";
        mysqli_query($conn, $insertOrderDescription);

        // move to another file
//        $insertOrderDescription = "INSERT INTO orders_status (order_id, user_ud, is_done, total_price_amount) VALUES ()";
//        mysqli_query($conn, $insertOrder);

//		echo "You have selected ->".$cup_price_size[0]."<- as your beverage.<br>";
//		echo "You have selected ->".$cup_price_size[1]."<- as your beverage.<br>";
//		echo "You have selected ->".$selectedBev."<- as your beverage.<br>";
//		echo "With the ->".$selectedSize."<- size.<br>";
//		echo "And, you would like it ->".$selectedTemp."<-.<br>";
	}
?>
