<?php
require_once('dbConnection.php');
include_once('userSession.php');
checkSession();
$user_name = $_SESSION['name'];
$nameQuery = "select * from users_info where username='$user_name'";
$result = $conn->query($nameQuery);

$userID;
if($result->num_rows > 0){
	if($row = $result->fetch_assoc()){
		$userID = $row['id'];
	}
}
if(isset($user_name)) echo "<u>".$user_name.", Active Cards:</u><br>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Card</title>
</head>
<body>
	<form method="get" action="">
		<select name="card" onChange="this.form.submit()">
			<option>ViewCard</option>
			<?php //fetch current user card numbers
			$cardNumber = mysqli_query($conn, "SELECT card_number FROM cards_info WHERE user_id='$userID'");
	 		while($row = mysqli_fetch_array($cardNumber)):; ?>
			<option><?php echo $row['card_number']; ?></option>
			<?php endwhile;
			?>
		</select>
		<?php
		if(isset($_GET['card'])) {
		echo "You Selected Card: ".$_GET['card'];
		//do something with selected card - payment?
		}
		?>
	</form>
<a href="addCard.php"><button>Add Card</button></a>
<a href="removeCard.php"><button>Remove Card</button></a>
</body>
</html>
