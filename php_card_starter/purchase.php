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

$beverage_img = 'beverage_img';
$beverage_size = 'beverage_size';
$beverage_price = 'beverage_price';

$product = mysqli_query($conn, "SELECT * FROM beverages_menu, beverages_size_price ORDER BY id");

		if(mysqli_num_rows($product)>0) {
			while($row = mysqli_fetch_assoc($product)) {
			?>
			<div>
				<?php echo "<img src=$row[$beverage_img]>"?>
				<?php echo "$row[$beverage_size]" ?>
                <?php echo "$row[$beverage_price]" ?>
                <?php echo '<a href="#?add='.$row['id'].'">Add</a>'; ?>
			</div>
    		<?php
			}
		}
?>
