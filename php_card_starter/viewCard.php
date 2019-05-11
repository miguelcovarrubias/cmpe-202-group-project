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
	<title>View Card</title>
</head>
<body>
	<form method="get" action="">
		<select name="card" onChange="this.form.submit()">
			<option>ViewCard</option>
			<?php //fetch current user card numbers
			$cardNumber = mysqli_query($conn, "SELECT card_number FROM cards_info WHERE user_id='$user_id'");
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
