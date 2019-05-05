<?php 
require_once('dbConnection.php');
session_start();

$user_name = $_SESSION['name'];
$cardNumber = mysqli_query($conn, "SELECT * FROM myCard WHERE user_name = '$user_name'");

if(isset($user_name)) echo $user_name.", your cards are displayed below!<br>";

//fetch current user's card numbers
while($row = mysqli_fetch_assoc($cardNumber)) {
	echo "cards: ".$row['card_number']."<br>";
} 
mysqli_close($conn);
?>
