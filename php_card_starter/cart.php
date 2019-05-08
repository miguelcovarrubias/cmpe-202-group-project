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
		<div>
			<h2><?php echo $product['name'] ?></h2>
			<img src=<?php echo $product['img']?>>
		<select>
  			<option value="sm">Small</option>
  			<option value="md">Medium</option>
  			<option value="lg">Large</option>
		</select>
		</div>
	<?php
		}
	}
?>
</body>
</html>