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
		<h3 align="center" >Research List</h3>
</div>


<div class="container"> 
<center>


<table>
	<tr><td><h2>Research List</h2></td></tr>
</table>

<?php
include_once 'dbh_inc.php';
$employeeid = $_GET['a'];

session_start();
$sql ="select * from research where employeeid='".$employeeid."';";
$result= $conn->query($sql);

echo '<table  id="tab">';
while($row = $result->fetch_assoc()){
	echo '<tr><td><a href="researchdetails(view).php?a='.$row['researchid'].'">'.$row["title"].'</a></td></tr>';
}
echo '</table>';
if(isset($_POST['logout'])){
	unset($_SESSION['employeeid']);
	header('Location:facultylogin.php');
}
?>

</center>

</div>






<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



<footer>
  <p>Developed for VIT</p>
</footer>
</body>
</html>