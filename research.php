<!DOCTYPE html>
<html>
<head>
	<title>Facultylogin</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<style>
		h3{
			color: green;
		}
	</style>

</head>
<body>

	<div class="topnav">
		<a href="http://localhost/FRMS/facultyhome.php" >Faculty Home</a>
		<a><form method='post' action='<?php echo $_SERVER['PHP_SELF'] ?>'><button name='logout'>Logout</button></form></a>
	</div>
	

<div class="container" style="background: #eeeeee; padding: 3% 0; border-radius: 10px; max-width: 72em; margin: 15px 15%;"> 
		<h1 align="center">Employee research progress managment system</h1>
		<h3 align="center" >Research list</h3>
</div>




<div class="container"> 
	

<center>
<table>
	<tr><td><b>Research list</b></td></tr>
</table>

<?php
include_once 'dbh_inc.php';
session_start();

$sql ="select * from research where employeeid='".$_SESSION['employeeid']."'";
$result= $conn->query($sql);

echo '<table  id="tab">';
while($row = $result->fetch_assoc()){
	echo '<tr><td><a href="detailview.php?a='.$row['researchid'].'">'.$row["title"].'</a></td></tr>';
}
echo '</table>';
if(isset($_POST['logout'])){
	unset($_SESSION['employeeid']);
	header('Location:facultylogin.php');
}
?>

</div>
</center>

<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<footer>
  <p>Developed for VIT</p>
</footer>
</body>
</html>