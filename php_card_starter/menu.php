
<?php
/*The code the css and the html here was taken from: https://www.w3schools.com/howto/howto_css_dropdown.asp*/
	include_once("stylesheets/stylesheet.css");
	//the line below can be replaced with [require_once('dbConnection.php');], i m pretty sure	
	include("tempLocalDBSetup.php");

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
	$sqlquery = "select * from beverage_size_price;";
	$result = $conn->query($sqlquery);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo "<option value='".$row["beverage_size"]."'>".$row["beverage_size"]."</option>";
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
		
