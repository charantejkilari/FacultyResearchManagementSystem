
<!DOCTYPE html>
<html>
<head>
	<title>Facultylogin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		h3{
			color: green;
		}
	</style>

</head>
<body>
<?php 
	include_once 'dbh_inc.php';
	session_start(); 
	if (isset($_POST['login'])) 
	{ 
		$username = $_POST['username']; 
		$password = $_POST['password']; 

		$sql = "SELECT password,employeeid FROM employee WHERE username = '$username' and password = '$password'"; 
		$result = $conn->query($sql);
		$ret=mysqli_fetch_assoc($result);
		if(mysqli_num_rows($result)>0){
				$_SESSION['employeeid'] = $ret['employeeid']; 
				header('Location:facultyhome.php'); 
			}
			else{ 
				header('Location:facultylogin.php?error=INVALID CREDENTIALS!! TRY AGAIN...OR CHECK IF YOU ARE SIGNED UP');
		}
	}
 	 
 	?> 
	<div class="topnav">
		<a href="http://localhost/FRMS/home.php" class="navbar-brand">Home</a>
	</div>

<div class="container" style="background: #eeeeee; padding: 3% 0; border-radius: 10px; max-width: 72em; margin: 15px 15%;"> 
	<h1 align="center">Employee research progress managment system</h1>
	<?php if (isset($_GET['error'])) { ?>
	<p class="err"><?php echo $_GET['error']; ?></p>
    <?php } ?>
	<h3 align="center">Faculty Login</h3>
</div>


<div class="container"> 
	<form method="POST">
	<br><br>
					<center>
					<label for="inputEmail3" style="font-weight: bold; color: #2c3e55;" >Username : </label>
					<input style="width:29%; border: 1px solid grey; padding: 7px 0; border-radius: 5px" type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username">
					</center>
<br>
					<center>
					<label for="inputPassword3" style="font-weight: bold; color: #2c3e55;">Password  :&nbsp; </label>

					<input style="width:29%; border: 1px solid grey; padding: 7px 0; border-radius: 5px" type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
					</center>

<br>


					<center>
					<input type="submit" class="button" name="login" value="login" ><br>
					</center>
					<br>
					<center>
					<label for="sign-up"> Not a user?</label>
					<a  id ="signup" type="submit" class="signup" href ="signup.php">Sign-up</a></center>
					<br>
					<br>
					

	</form>
</div>

<br>
<footer>
  <p>Developed for VIT</p>
</footer>
</body>
</html>