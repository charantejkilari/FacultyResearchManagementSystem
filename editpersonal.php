  <html>
<head>
  <title>Edit Personal Details</title>
  <link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
<?php 
  include_once 'dbh_inc.php';
  session_start(); 
  if (isset($_POST['update'])) 
  { 
    $school = $_POST['school']; 
    $desgination = $_POST['desgination']; 
    $cabino = $_POST['cabino'];
    $phoneno = $_POST['phoneno'];
    $employeeid= $_SESSION['employeeid'];

    $sql = "update employee set school='$school' , designation='$desgination' , cabino='$cabino' , phoneno='$phoneno' where employeeid=$employeeid"; 
    $conn->query($sql);
    header('Location:facultyhome.php');
  } 
  ?> 
  <div class="topnav">
    <a href="facultyhome.php" class="navbar-brand">Faculty Home</a>
	</div>

  <div class="container" style="background: #eeeeee; padding: 3% 0; border-radius: 10px; max-width: 72em; margin: 15px 15%;"> 
	  <h1 align="center">Employee research progress managment system</h1>
  </div>

<div class="container"> 
	<form method="POST">
	<br><br>
					<center>
					<label for="School" style="font-weight: bold; color: #2c3e55;" >School: </label>
					<input style="width:29%; border: 1px solid grey; padding: 7px 0; border-radius: 5px" type="text" name="school" class="form-control" id="School" placeholder="School">
					</center>
<br>
					<center>
					<label for="Desgination" style="font-weight: bold; color: #2c3e55;">Designation: &nbsp; </label>

					<input style="width:29%; border: 1px solid grey; padding: 7px 0; border-radius: 5px" type="text" name="desgination" class="form-control" id="Desgnation" placeholder="Designation">
					</center>
<br>
          <center>
					<label for="Cabin No." style="font-weight: bold; color: #2c3e55;">Cabin number:&nbsp; </label>

					<input style="width:29%; border: 1px solid grey; padding: 7px 0; border-radius: 5px" type="text" name="cabino" class="form-control" id="Cabin No." placeholder="Cabin number">
					</center>
<br>
          <center>
					<label for="Phone number" style="font-weight: bold; color: #2c3e55;">Phone number:&nbsp; </label>

					<input style="width:29%; border: 1px solid grey; padding: 7px 0; border-radius: 5px" type="text" name="phoneno" class="form-control" id="Phone number" placeholder="Phone number">
					</center>
<br>


					<center>
					<input type="submit" class="button" name="update" value="update" ><br>
					</center>
<br><br>

	</form>
</div>

<footer>
  <p>Developed for VIT</p>
</footer>
</body>
</html>  