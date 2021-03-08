<!DOCTYPE html>
<html>
<head>
    <title>View home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<style>
		h3{
			color: green;
		}
		table{
    		width: 80%;
			text-align: center;
			font-size:20px;
			color: black;
			border: 2px solid black;
			border-collapse: collapse;	
		}		
		th, td{
			text-align: center;
			font-size:20px;
			color: black;
			border: 2px solid black;
			border-collapse: collapse;	
		}
	</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="viewhome.php">Home</a>
</div>

<div class="container" style="background: #eeeeee; padding: 3% 0; border-radius: 10px; max-width: 72em; margin: 15px 15%;">
        <h1 align="center" style="font-size: 4em; margin: 0;">Research Progress <br> Managment System</h1>
		<h3 align="center" >Personal details</h3>
</div>





<div class="container"> 
<center>


<table>
	<tr><td><h2>Personal details</h2></td></tr>
</table>


<?php
include_once 'dbh_inc.php';
session_start();

$name=$_POST['name'];
$sql ="select * from employee where name='$name';";
$result= $conn->query($sql);


echo '<table id="tab">';
while($row = $result->fetch_assoc()){
	echo '<tr><td>Name : </td><td>'.$row["name"].'</td></tr>';
	echo '<tr><td>Emain ID : </td><td>'.$row["email"].'</td></tr>';
	echo '<tr><td>Phone Number : </td><td>'.$row["phoneno"].'</td></tr>';
	echo '<tr><td>Cabin Number : </td><td>'.$row["cabino"].'</td></tr>';
	echo '<tr><td>School : </td><td>'.$row["school"].'</td></tr>';
	echo '<tr><td>Faculty Id : </td><td>'.$row["employeeid"].'</td></tr>';
	$employeeid=$row["employeeid"];
	$_SESSION['employeeid']=$row["employeeid"];
}

echo '</table>';
echo '<br><br><br>';
echo '<a  style="margin-right:35px; padding: 14px 28px; font-size: 16px;" href="detailview(view).php?a='.$employeeid.'" class="button">Research details</a>';



?>
</center>

</div>
<br>
<br>
<br><br><br>









<footer>
  <p>Developed for VIT</p>
</footer>
</body>
</html>