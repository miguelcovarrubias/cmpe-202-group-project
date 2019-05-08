<?php 
require_once('dbConnection.php');
include_once('userSession.php');
checkSession();

try {
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS beverages_menu (id int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY, beverage_name VARCHAR(40) NOT NULL, beverage_img LONGBLOB NOT NULL)");
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS beverages_size_price (beverage_size VARCHAR(40) NOT NULL, beverage_price DOUBLE NOT NULL)");
//Execute the below insert queries only once to avoid duplicates!
/*mysqli_query($conn, "INSERT INTO beverages_menu (beverage_name, beverage_img) VALUES ('coffee', 'images/coffee.jpg'), ('tea', 'images/tea.jpg')");
mysqli_query($conn, "INSERT INTO beverages_size_price (beverage_size, beverage_price) VALUES ('small', '3.50'), ('medium', '4.50'), ('large', '5.50')");*/
} catch(Exception $e) {
	$e->getMessage();
}

	if(isset($_POST['addToCart'])) {
		$id = $_GET['add'];
		$result = mysqli_query($conn, "SELECT * FROM beverages_menu WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);

		$cart = array(
			$id=>array('name'=>$row['beverage_name'], 'id'=>$row['id'], 'img'=>$row['beverage_img'])
		);

		if(empty($_SESSION['shop'])) {
			$_SESSION['shop'] = $cart;
		} else {
			if(!in_array($id,array_keys($_SESSION['shop']))) {
			$_SESSION['shop'] = array_merge($_SESSION['shop'],$cart);
		  }
	    }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
</head>
<body>
<?php
		//fetch & display menu items
		$menu = mysqli_query($conn, "SELECT * FROM beverages_menu ORDER BY id ASC");
		if(mysqli_num_rows($menu)>0) {
			while($row = mysqli_fetch_assoc($menu)) {
			?>	
			<div>
				<form method="post" action="purchase.php?add=<?php echo $row["id"]; ?>">
					<div>
						<h2><?php echo $row['beverage_name'] ?></h2>
						<img src=<?php echo $row["beverage_img"]?>>
                		<input type="submit" name="addToCart" value="AddToCart">
					</div>
				</form>
			</div>
    		<?php
			}
			?>
			<p><a href="cart.php"><button>Cart</button></a></p>
			<?php
		}
?>
</body>
</html>