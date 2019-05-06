<?php 
require_once('dbConnection.php');
session_start();
if(!isset($_SESSION['loggedin'])) header("Location: login.php");

$user_name = $_SESSION['name'];
$cardNumber = mysqli_query($conn, "SELECT * FROM myCard WHERE user_name = '$user_name'");
if(isset($user_name)) echo "<u>".$user_name.", Active Cards:</u><br>";

//fetch current user's card numbers
while($row = mysqli_fetch_assoc($cardNumber)) {
	echo "card: ".$row['card_number']."<br>";
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Card</title>
</head>
<body>
	<a href="addCard.php"><button>Manage Card</button></a>
</body>
</html>