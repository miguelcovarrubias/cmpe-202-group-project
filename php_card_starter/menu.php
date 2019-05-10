<?php
	include_once("stylesheets/stylesheet.css");
	require_once('dbConnection.php');
	
	//Setup the beverage names table
	try{
		$createMenu = "CREATE TABLE IF NOT EXISTS beverage_menu (beverage_name varchar(40) NOT NULL);";
		mysqli_query($conn, $createMenu);
	} catch(Exception $e){
		$e->getMessage();
	}
	
	//Set up the table for beverage sizes
	try{
		$createSize = "CREATE TABLE IF NOT EXISTS beverage_size_price (beverage_size varchar(40) NOT NULL, price double NOT NULL);";
		mysqli_query($conn, $createSize);
	} catch(Exception $e){
		$e->getMessage();
	}

	//Set up the table for beverages temp
	try{
		$createTemp = "CREATE TABLE IF NOT EXISTS beverage_options (name varchar(40) NOT NULL);";
		mysqli_query($conn, $createTemp);
	} catch(Exception $e){
		$e->getMessage();
	}
	
	echo "<h1> Make your order below </h1>";
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
	<button class="button" type="submit" name="insertOrder"> $ Buy </button>
</form>	
		
