<?php
	include_once 'dbh_inc.php';
	$name = $_POST['name'];
	$username= $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	session_start();

	//error handles
	//check for empty fields
	
	 if(empty($name) || empty($username) || empty($email) || empty($password))
	 {
	 	header("Location:http://localhost/FRMS/facultyhome.php?values=empty");
	 	exit();
	 }
	 else{
	 	$sql ="insert into research values ('$_SESSION["employeeid"]','','','');";
		$conn->query($sql);

		
	}	
?>