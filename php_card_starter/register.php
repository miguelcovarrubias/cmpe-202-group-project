<?php 
	require_once('dbConnection.php');
	include_once('userSession.php');
	checkRegSession();

	//SQL injection prevention & some validation queries
	$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$confirmpass = mysqli_real_escape_string($conn, $_POST['confirmpass']);
	$authUsername = mysqli_query($conn, "SELECT user_id FROM users_info WHERE username='$username'");
	$authEmail = mysqli_query($conn, "SELECT user_id FROM users_info WHERE email='$email'");

	//submit pressed? validate user information -> persist registration data
	if(isset($_POST['submit'])) {
		if(($password != $confirmpass) || (!filter_var($email, FILTER_VALIDATE_EMAIL)) || mysqli_fetch_assoc($authUsername) || mysqli_fetch_assoc($authEmail)) { 
			echo "User already exists.";
		} else {
			$password = md5($password);
			$registerQuery = "INSERT INTO users_info (first_name, last_name, username, password, email) VALUES ('$first_name', '$last_name', '$username', '$password', '$email')";
			mysqli_query($conn, $registerQuery);
			header('Location: login.php');
		exit();
		}
	}
	mysqli_close($conn);
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Create account</h1>
	<form method = "post" action = "register.php"> 
    First Name: <input type="text" placeholder="Your name" name="first_name" pattern="^([a-zA-Z]+\s)*[a-zA-Z]+$" required><br>
    Last Name: <input type="text" placeholder="Your name" name="last_name" pattern="^([a-zA-Z]+\s)*[a-zA-Z]+$" required><br>
	Email: <input type="email" placeholder="example@gmail.com" name="email" required><br>
	Username: <input type="username" placeholder="Your username" maxlength="15" name="username" required><br>
	Password: <input type="password" placeholder="At least 6 characters" minlength="6" maxlength="16" name="password" id="password" required><br>
	Re-enter password: <input type="password" placeholder="Repeat password" maxlength="16" name="confirmpass" oninput="check(this)" required><br>
	<input type="submit" name="submit"></button><br>
	<p>Already have an account? <a href="login.php">Sign in</a></p>
	</form>
	<script language="javascript" type="text/javascript">
		function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Must be Matching.');
        } else {
            input.setCustomValidity('');
        }
    }
	</script>
</body>
</html>