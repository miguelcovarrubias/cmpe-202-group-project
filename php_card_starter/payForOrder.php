<?php
	require_once('dbConnection.php');
	include_once('userSession.php');

	$orderID;
	$userID;
	
	if(isset($_SESSION['name'])){
		$user_name = $_SESSION['name'];
		$nameQuery = "select * from register where user_username='$user_name'";
		$result = $conn->query($nameQuery);
	
		if($result->num_rows > 0){
			if($row = $result->fetch_assoc()){
				$userID = $row['id'];
			}
		}
	}
	
	echo "<br><h1>$userID</h1><br>";

	//charge the user's active card 
	getOrderPrice($userID, $orderID, $conn);
	$conn->close();
	

	function getOrderPrice($userID, $orderID, $conn){
		echo "<br><h1>Here i m</h1><br>";
		$orderQuery = "SELECT * from orders_description where order_id=$userID;";
		//$result = $conn->query($orderQuery);
		$price = 0;
		if($result = $conn->query($orderQuery)){
			//echo("Got something <br>");
			while($row = $result->fetch_assoc()){
				$orderID = row["order_id"];
				$price = $row["price"] + $price;	
			}
			echo "<br>This is the price of the order.$price<br>";
			$insertToOrderStatus = "insert into orders_status(user_id, total_price_amount) values($userID, $price)";
			$conn->query($insertToOrderStatus);
			
		}
		//echo($price);
		if($price > 0){
			echo "<br><h1>Going to charge card<h1><br>";
			chargeUserActiveCard($userID, $orderID, $price);
		}
	}


	function chargeUserActiveCard($userID, $orderID, $price){
		$cardQuery = "SELECT * from cards_info where user_name='ms1' and active='true'";
		if($result = $conn->query($cardQuery)){
			if($row = $result->fetch_assoc()){
				$prevCardAmou = $row["money"];
				if($prevCardAmou > $price){
					$lastFour = substr($row["card_number"], -4);
					echo "Your card number ending with ".$lastFour." has been charged.";
					$newCardAmou = $newCardAmou - $price;
					$card_id = $row["card_id"];
					$conn->query("update myCard set money='$newCardAmou' where card_id='$card_id'");
				}
			}
		} 
	}
