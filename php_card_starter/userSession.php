<?php 
session_start();

//prevent user from accessing resources (e.g, add card) if not logged in
function checkSession() {
	if(!isset($_SESSION['loggedin'])) header("Location: login.php");
}

//prevent user from registering while logged in
function checkRegSession() {
	if(isset($_SESSION['loggedin'])) header("Location: addCard.php");
}
?>