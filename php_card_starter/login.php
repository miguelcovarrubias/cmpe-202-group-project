<?php
	session_start();
	require_once('dbConnection.php');

	if (isset($_POST['login'])) {
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, md5($_POST['password']));
	$authQuery = mysqli_query($conn, "SELECT user_id FROM users_info WHERE username='$username' AND password='$password'");

		if($row = mysqli_fetch_assoc($authQuery)) {
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $row['user_id'];
			header("Location: userDashboard.php?login=success");
		} else {
		header("Location: login.php?login=failed");
		exit();
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Sign in</h1>
	<form method = "post" action = "login.php">
	Username: <input type="username" placeholder="Enter username" name="username" maxlength="15" required><br>
	Password: <input type="password" placeholder="Enter password" name="password" minlength="6" maxlength="16" required><br>
	<input type="submit" name="login" value="Sign in"></button><br>
	<p>New? <a href="register.php">Create account</a></p>
	</form>
</body>
</html>
