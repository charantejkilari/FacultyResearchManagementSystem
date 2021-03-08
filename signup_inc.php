<?php
	include_once 'dbh_inc.php';
	$name = $_POST['name'];
	$username= $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	//error handles
	//check for empty fields
	
	 if(empty($name) || empty($username) || empty($email) || empty($password))
	 {
	 	header("Location:http://localhost/FRMS/signup.php?error=empty fields");
	 	exit();
	 }
	 else 
	 {
	 	//check if input characters are valid
	 	if(!preg_match("/^[a-zA-Z0-9]*$/", $name))
	 	{	
	 		header("Location:http://localhost/FRMS/signup.php?error=invalid cdetails");
	 		exit();
	 	}
	 	else
	 	{
	 	//check if email is valid 
	 		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	 		{
	 		header("Location:http://localhost/FRMS/signup.php?error=check email");
	 		exit();	
	 		}
	 		else 
	 		{
	 			$sql ="select * from employee where email = '$email'";
	 			$result = $conn->query($sql);
	 			$result = $result->num_rows;

	 			if($resultCheck >0)
	 			{
	 			header("Location:http://localhost/FRMS/signup.php?error=usertaken");
	 			exit();	
	 			}
	 			else
	 			{
				
			 	$sql1 ="insert into employee(name,username,password,phoneno,email,designation,cabino,school) values ('$name','$username','$password','0','$email','','0','');";
			 	$conn->query($sql1);
			 	
			 	header("Location:http://localhost/FRMS/facultylogin.php");
 				exit();
 				}
 			}
 		}
 	}

 ?>




