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
  <a class="active" href="home.php">Home</a>
</div>

<div class="container" style="background: #eeeeee; padding: 3% 0; border-radius: 10px; max-width: 72em; margin: 15px 15%;">
        <h1 align="center" style="font-size: 4em; margin: 0;">Research Progress <br> Managment System</h1>
		<h3 align="center" >Research Details</h3>
</div>

<div class="container"> 
<center>


<table>
	<tr><td><h2>Research Details</h2></td></tr>
</table>

<?php
include_once 'dbh_inc.php';
$researchid = $_GET['a'];

session_start();
$sql ="select * from research where researchid='".$researchid."' and employeeid='".$_SESSION['employeeid']."';";
$result= $conn->query($sql);

echo '<center><table id="tab">';
while($row = $result->fetch_assoc()){
	echo '<tr><td>Title : </td><td>'.$row["title"]."</td></tr>";
	echo '<tr><td>Status : </td><td>'.$row["status"]."</td></tr>";
	echo '<tr><td>Start Date : </td><td>'.$row["startdate"]."</td></tr>";
	echo '<tr><td>End Date : </td><td>'.$row["enddate"]."</td></tr>";
}


echo '</center></table>';
$filename="uploads/".$researchid."_research.pdf";
//echo $filename;
if(isset($_POST['logout'])){
	unset($_SESSION['employeeid']);
	header('Location:facultylogin.php');
}

?>
<br><br>
<center>
<a href='<?=  $filename ?>' download>
	<button type="button" style="background-color:yellow;display:block;">
   Click here to download
</button> </a>
</center>
</div>
<br><br><br><br>

<footer>
  <p>Developed for VIT</p>
</footer>
</body>
</html>

