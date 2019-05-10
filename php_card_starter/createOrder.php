<?php
	include_once("stylesheets/stylesheet.css");
    require_once('dbConnection.php');

	echo "<h1> Make your order below </h1>";
?>

<?php
$cart = array();

?>

<br>
<form method="post" action="insertOrder.php">
	<fieldset>
		<label>Select a Beverage</label>
			<select name="selectedBev" required>
<?php
	//Get and display the data from the beverage_name table	
	$sqlquery = "select beverage_name from beverage_menu;";
	$result = $conn->query($sqlquery);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo "<option value='".$row["beverage_name"]."'>".$row["beverage_name"]."</option>";
		}
		echo "</select>";
		echo "</fieldset>";
	}
?>
	
	<fieldset>
		<label>Select a Size</label>
			<select name="selectedSize" required>
<?php
	//Get and display the data from the beverage_size_price table	
	$sqlquery = "select CONCAT(\"$\", price, \", \", beverage_size) as beverage_size_and_price, beverage_size, price from beverage_size_price order by price asc;";
	$result = $conn->query($sqlquery);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo "<option value='".$row["beverage_size_and_price"]."'>".$row["beverage_size_and_price"]."</option>";
		}
		echo "</select>";
		echo "</fieldset>";
	}
?>
	
	<fieldset>
		<label>Select Temperature</label>
			<select name="selectedTemp" required>

<?php	
	//Get and display the data from the beverage_options table	
	$sqlquery = "select * from beverage_options;";
	$result = $conn->query($sqlquery);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo "<option value='".$row["name"]."'>".$row["name"]."</option>";
		}
		echo "</select>";
		echo "</fieldset>";
	}
	
	$conn->close();
?>

<br>
<!-- push to cart               -->
<button> Add to Order</button>
</br>
<br>  </br>
<button class="button" > Finish and Pay </button>
</form>	
		
