<?php
session_start();
include 'dbh.php';


$username = $_POST['username'];
$pass = $_POST['pass'];


$_SESSION['username'] = $username;
$sql = "SELECT * FROM users WHERE username='$username' AND pass='$pass'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
	header("Location:loginpage.php??error=usernamepass");
}
else {

	$_SESSION['username'] = $row['username'];
    $_SESSION['pass'] = $row['pass'];
	$_SESSION['role'] = $row['role'];
	
header("Location:voucher.php");
}


	
?>