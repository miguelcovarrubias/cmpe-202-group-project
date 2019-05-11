<?php
	require_once('dbConnection.php');
	include_once('userSession.php');
    checkSession();

	$orderID;
	$userID;
	
	$orderID = $_SESSION['orderID'];
	
	if(isset($_SESSION['name'])){
		$user_name = $_SESSION['name'];
		$nameQuery = "select * from users_info where username='$user_name'";
		$result = $conn->query($nameQuery);
	
		if($result->num_rows > 0){
			if($row = $result->fetch_assoc()){
				$userID = $row['user_id'];
			}
		}
	}
	

	//charge the user's active card 
	getOrderPrice($userID, $orderID, $conn);
	$conn->close();
	

	function getOrderPrice($userID, $orderID, $conn){
		//echo "<br><h1>Here i m</h1><br>";
		$orderQuery = "SELECT * from orders_description where order_id=$orderID;";
		//$result = $conn->query($orderQuery);
		$price = 0;
		if($result = $conn->query($orderQuery)){
			//echo("Got something <br>");
			while($row = $result->fetch_assoc()){
				$orderID = $row["order_id"];
				$price = $row["price"] + $price;	
			}
			echo "<br><h1>Total price to pay: $$price </h1><br>";
			$insertToOrderStatus = "insert into orders_status(user_id, is_done, total_price_amount) values($userID, 'false', $price)";
			$res = $conn->query($insertToOrderStatus);
			
		}
		//echo($price);
		if($price > 0){
			chargeUserActiveCard($userID, $orderID, $price, $conn);
		}
	}


	function chargeUserActiveCard($userID, $orderID, $price, $conn){
		$cardQuery = "SELECT * from cards_info where user_id='$userID' and active='true';";
		//echo "<br><h3>Going to charge card for user with ID: '$userID'<h3><br>";
		if($result = $conn->query($cardQuery)){
			//echo "<br><h1>Got something</h1><br>";
			if($row = $result->fetch_assoc()){
				$prevCardAmou = $row["money"];
				if($prevCardAmou > $price){
					$lastFour = substr($row["card_number"], -4);
					$newCardAmou = $prevCardAmou - $price;
					$card_id = $row["card_id"];
					$conn->query("update cards_info set money='$newCardAmou' where card_id='$card_id'");
					echo "Your card number ending with ".$lastFour." has been charged.<br>
					New cards amount is: $newCardAmou<br>";
				}
				else{
					$lastFour = substr($row["card_number"], -4);
					echo "<br><h3>Not enough balance for card ending with: ".$lastFour." </h3><br>";
				}
			}
		} 
	}

	?>

<!DOCTYPE html>
<html>

<body>
<p><a href="userDashboard.php"><button>User Dashboard</button></a></p>
<p><a href="viewCard.php"><button>View Card</button></a></p>
<p><a href="logout.php"><button>Logout</button></a></p>
</body>
</html>

