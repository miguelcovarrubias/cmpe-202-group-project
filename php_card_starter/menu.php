
<?php
/*The code the css and the html here was taken from: https://www.w3schools.com/howto/howto_css_dropdown.asp*/
	include("stylesheets/stylesheet.css");
	$conn = mysqli_connect("localhost", "username", "password", "cmpe202");
	echo "I m here yo. <br>";
	// Check connection
	if ($conn->connect_error) {
	    	die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	
	//The above code will be replaced with the dbConnection.php, once the db
	// has been set up
	try{
		$createMenu = "CREATE TABLE IF NOT EXISTS beverage_menu (beverage_name varchar(40) NOT NULL);";
		mysqli_query($conn, $createMenu);
	} catch(Exception $e){
		$e->getMessage();
	}
	
	//Get the data from the beverage_name table	
	$sqlquery = "select beverage_name from beverage_menu;";
	$result = $conn->query($sqlquery);
	
	if($result->num_rows > 0){
		//The if statment is continued after the html section below
?>

<br>
 <div class="dropdown">
   <button class="dropbtn">Select a Beverage</button>
     <div class="dropdown-content">

<?php
		//continue if statement
		while($row = $result->fetch_assoc()){
			echo "<a href='#'>".$row["beverage_name"]."</a>";
		}
	}
	
	$conn->close();
?>
		
