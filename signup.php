<?php

include 'dbh.php';

$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$pass = $_POST['pass'];	
$confrimpass = $_POST['confrimpass'];
$email = $_POST['email'];


if(empty($_POST['name'])) {
	header("Location:register.php?error=name");
	
	exit();
}

if(empty($_POST['username'])) {
	header("Location:register.php?error=username");
	
	exit();
}

//Validate password
if(empty($_POST['pass'])) {
	header("Location:register.php?error=pass");
	
	exit();
}

//double confrim the password
if($_POST['pass'] != $_POST['confrimpass']) {
	header ("Location:register.php?error=confrimpass");
	
	exit();
}

if(empty($_POST['email'])) {
	header("Location:register.php?error=email");
	
	exit();
}

    
		$sql= "SELECT username FROM users WHERE username='$username'";
		$result = mysqli_query($conn, $sql);
		$uidcheck = mysqli_num_rows($result);
		if($uidcheck > 0) {
			 header("Location:register.php?error=username");
			print '<p class="error">username Existed!.</p>';
			exit();
		} 
		//Success message will be print, if no error occur: 
		else {
			$sql = "INSERT INTO users (name,username,pass,confrimpass,email)
			VALUES ('$name','$username','$pass','$confrimpass','$email')";
			$result = mysqli_query($conn, $sql);
			
			print '<p>You have been successfully registered.</p>';
			header("Location: loginpage.php");
		}
		
	
?>