
<style>
table, th, td {
  border: 1px solid black;
}
/* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/*for aligning left*/
.float-left-child{
	float: left;
}

/*also for aligin side by side*/
.inline-block-child{
	display: inline-block;
	margin: 10px;
}

/*Overriting some things in button class*/
.button{
	width: 200px;
	height: 40px;
	text-align: center;
	margin:0 auto;
	background-color: #4CAF50; 
	font-weight: bold;
	font-size: 19px;
	text-decoration: underline;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;} 
</style>
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

    $user_name = $_SESSION['name'];
    if(isset($user_name)){
	echo "Hello, ".$user_name;
	
	if(isset($_POST['insertOrder'])){
		extract($_POST);
        $nextOrderIdQuery = "SELECT AUTO_INCREMENT as next_id FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'db_name' AND TABLE_NAME = 'orders_status'";
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
        $_SESSION['orderID'] = $nextOrderId;
	}
	
	$result = mysqli_query($conn, "SELECT * FROM orders_description");

	    if (mysqli_num_rows($result) > 0) {
		    echo "<br><br><br><h2>Your current order:</h2><br>";
		    echo "<table>";
		    echo "<tr><th>Beverage</th><th>Size</th><th>Other Options</th></tr>";
        	while ($row = mysqli_fetch_array($result)) {
				//echo "<br>".$row['order_id']." here it is --------: ".$nextOrderId."<br>";
				if($row['order_id'] == $nextOrderId){
					echo"<tr>";
					echo"<td>";
						echo $row['beverage_name'];
					echo "</td>";
					echo"<td>";
						echo $row['cup_size'];
					echo "</td>";
					echo"<td>";
						echo $row['other_options'];
					echo "</td>";
					echo "</tr>";
				}
        	}
		    echo"</table>";
		} else {
			echo "<br>No Record Found in cart";
		}
	
    }





        // move to another file
//        $insertOrderDescription = "INSERT INTO orders_status (order_id, user_ud, is_done, total_price_amount) VALUES ()";
//        mysqli_query($conn, $insertOrder);

//		echo "You have selected ->".$cup_price_size[0]."<- as your beverage.<br>";
//		echo "You have selected ->".$cup_price_size[1]."<- as your beverage.<br>";
//		echo "You have selected ->".$selectedBev."<- as your beverage.<br>";
//		echo "With the ->".$selectedSize."<- size.<br>";
//		echo "And, you would like it ->".$selectedTemp."<-.<br>";
?>	

<p><a href="createOrder.php"><button>Add more</button></a></p>
<a href="payForOrder.php"><button class="button" type="submit" name="insertOrder"> Finish and Pay </button></a>

