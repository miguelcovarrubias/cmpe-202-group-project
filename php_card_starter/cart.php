<?php 
require_once('dbConnection.php');
include_once('userSession.php');
checkSession();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
<body>
<?php
	if(!empty($_SESSION['shop'])) {
		foreach($_SESSION['shop'] as $product) {
		?>
		<form method="get" action="">
		<div>
			<h2><?php echo $product['name'] ?></h2>
			<img src=<?php echo $product['img']?>>
			<select name="size" onChange="this.form.submit()">
				<option>Size</option>
				<option>Small</option>
				<option>Medium</option>
				<option>Large</option>
			</select>
			<td>
			<?php 
			$size = $_GET['size'];
			$price = mysqli_query($conn, "SELECT beverage_price FROM beverages_size_price WHERE beverage_size = '$size'");
			$row = mysqli_fetch_assoc($price);
			echo $size." ".$product['name'].": $".$row['beverage_price']." Beverage_ID:".$product['id']; 	
			?>
			</td>
		</div></form>
			<?php
			}
		}
?>
</body>
</html>