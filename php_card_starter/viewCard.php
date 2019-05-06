<?php 
require_once('dbConnection.php');
include_once('userSession.php');
checkSession();

$user_name = $_SESSION['name'];
if(isset($user_name)) echo "<u>".$user_name.", Active Cards:</u><br>";

//fetch current user's card numbers
$cardNumber = mysqli_query($conn, "SELECT card_number FROM myCard WHERE user_name='$user_name'");
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