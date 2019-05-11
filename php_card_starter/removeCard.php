<?php
require_once('dbConnection.php');
include_once('userSession.php');
checkSession();
$user_id = $_SESSION['name'];
if(isset($user_name)) echo "<u>".$user_name.", Active Cards:</u><br>";
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
			$cardNumber = mysqli_query($conn, "SELECT card_number FROM cards_info WHERE user_id='$user_id'");
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
