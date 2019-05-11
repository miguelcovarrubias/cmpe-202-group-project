<?php
	require_once('dbConnection.php');
	include_once('userSession.php');

	$orderID;
	$userID;

	//charge the user's active card 
	getOrderPrice($userID, $orderID, $conn);




	function getOrderPrice($userID, $orderID, $conn){
		echo "<br><h1>Here i m</h1><br>";
		$orderQuery = "SELECT * from orders_description where order_id=0;";
		//$result = $conn->query($orderQuery);
		$price = 0;
		if($result = $conn->query($orderQuery)){
			//echo("Got something <br>");
			if($row = $result->fetch_assoc()){
				$price = $row["price"];	
				echo "<br>This is the price of the order.$price<br>";
			}
		}
		//echo($price);
		if($price > 0){
			echo "<br><h1>Going to charge card<h1><br>";
			chargeUserActiveCard($userID, $orderID, $price);
		}
	}


	function chargeUserActiveCard($userID, $orderID, $price){
		$cardQuery = "SELECT * from myCard where user_name='ms1' and active='true'";
		if($result = $conn->query($cardQuery)){
			if($row = $result->fetch_assoc()){
				$prevCardAmou = $row["money"];
				if($prevCardAmou > $price){
					$lastFour = substr($row["card_number"], -4);
					echo "Your card number ending with ". $lastFour." has been charged.";
					$newCardAmou = $newCardAmou - $price;
					$card_id = $row["card_id"];
					$conn->query("update myCard set money='$newCardAmou' where card_id='$card_id'");
				}
			}
		} 
	}
