
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

	<div class="topnav">
		<a href="http://localhost/FRMS/facultyhome.php" >Faculty Home</a>
		<a style="float: right;"><form method='post' action='<?php echo $_SERVER['PHP_SELF'] ?>'><button name='logout' style="border: none; background: none; color: white;">Logout</button></form></a>
	</div>
	

<div class="container" style="background: #eeeeee; padding: 3% 0; border-radius: 10px; max-width: 72em; margin: 15px 15%;"> 
		<h1 align="center">Employee research progress managment system</h1>
		<h3 align="center" >Faculty Home</h3>
</div>

<div class="container">
<br>
<?php
include_once 'dbh_inc.php';
session_start();


$sql ="select * from employee where employeeid ='".$_SESSION['employeeid']."' ";
$result= $conn->query($sql);


echo '<center>';
echo '<h2>';
while($row = $result->fetch_assoc()){
	echo 'Welcome '.$row["name"];
}

echo '</center>';
echo '</h2>';
if(isset($_POST['logout'])){
	unset($_SESSION['employeeid']);
	header('Location:facultylogin.php');
}
?>
<br><br><br>
	<div class="container">
		<a  class="button" style="margin:70px width:33% padding-right:10px"  href="http://localhost/FRMS/editpersonal.php" >Update Personal Details</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a  class="button" style="margin:74px  width:33%"  href="http://localhost/FRMS/addnewresearch.php" >Add New Research</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a  class="button" style="margin:70px  width:33%"  href="http://localhost/FRMS/research.php" >Present Research Details</a>
	</div>
</div>
<br>

<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



<footer>
  <p>Developed for VIT</p>
</footer>
</body>
</html>