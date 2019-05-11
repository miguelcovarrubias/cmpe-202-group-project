<?php 
require_once('dbConnection.php');
include_once('userSession.php');
checkSession();
$user_name = $_SESSION['name'];
if(isset($user_name)) echo "<u>".$user_name.", Active Cards:</u><br>";
$nameQuery = "select * from users_info where username='$user_name'";
$result = $conn->query($nameQuery);

$userID;
if($result->num_rows > 0){
	if($row = $result->fetch_assoc()){
		$userID = $row['id'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Remove Card</title>
</head>
<body>
	<form method="get" action="">
		<select name="remove" onChange="this.form.submit()">
			<option>RemoveCard</option>
			<?php 
			//fetch current user card numbers
			$cardNumber = mysqli_query($conn, "SELECT card_number FROM cards_info WHERE user_id='$userID'");
	 		while($row = mysqli_fetch_array($cardNumber)):; ?>
			<option><?php echo $row['card_number']; ?></option>
			<?php endwhile;  
			?>
		</select>
		<?php 
		if(isset($_GET['remove'])) {
			$cardNumber = $_GET['remove'];
			$removeCard = "DELETE FROM cards_info WHERE user_id='$userID' AND card_number='$cardNumber'";
			mysqli_query($conn, $removeCard);
			echo "Card Removed: ".$cardNumber;
		}
		?>
	</form>
<a href="viewCard.php"><button>View Card</button></a>
</body>
</html>
