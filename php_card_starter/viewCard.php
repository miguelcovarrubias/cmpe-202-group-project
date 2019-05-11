<?php 
require_once('dbConnection.php');
include_once('userSession.php');
checkSession();

$user_name = $_SESSION['name'];
if(isset($user_name)) echo "<u>".$user_name.", Active Cards:</u><br>";
//fetch current user card numbers
$cardNumber = mysqli_query($conn, "SELECT card_number FROM myCard WHERE user_name='$user_name'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Card</title>
</head>
<body>
	<form method="get" action="">
		<select name="card" onChange="this.form.submit()">
			<option>Card</option>
			<?php while($row = mysqli_fetch_array($cardNumber)):; ?>
			<option><?php echo $row['card_number']; ?></option>
			<?php endwhile; ?>
		</select>
		<?php 
		if(isset($_GET['card'])) {
		echo "You Selected Card: ".$_GET['card'];
		//do something with selected card - payment?
		}
		?>
	</form>

<a href="addCard.php"><button>Add Card</button></a>
</body>
</html>
