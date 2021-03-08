
<!DOCTYPE html>
<html>
<head>
	<title>FACULTY HOME</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<style>
	
	body{
	padding-top: 70px;
	color: #2c3e55;
	padding-bottom: 100px;
	background: 808080;
}
.navbar-inverse{
	background: #2c3e55;
}

#content{
	text-align: center;
	padding: 15%;
}
button{
	background: #2c3e55;
	color: #dc143c;
	border: #2c3e55;
	font-size: 20px;
}
hr{
	border-top: 2px solid #f8f8f8;
	border-bottom: 2px solid rgb(0,0,0,0.2 );
}
h3
{
	color: green;
}
table{
	width: 80%;
}
tr{
	text-align: center;
	font-size:20px;
	color: #2c3e55;
	border: 3px solid #2c3e55;	
}


.button{
	margin-right:16px;
}



footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #2c3e55;
  color: white;
  text-align: center;
}



</style>



</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
	        	<span class="sr-only">Toggle navigation</span>
	      		</button>
				<a href="facultyhome.php" class="navbar-brand">Faculty Home</a>
				</div>
				<div>
					<ul class="navbar navbar-nav navbar-right">
				<li><a><form method='post' action='<?php echo $_SERVER['PHP_SELF'] ?>'><button name='logout'>Logout</button></form></a></li></ul>
			</div>
		</div>
	</nav>







<div class="container"> 
	<div class="jumbotron">
		<h1 align="center">Employee research progress managment system</h1>
		<h3 align="center" >Detail View</h3>
	</div>

<center>
<table>
	<tr><td>Detail View</td></tr>
</table>
</center>


<?php
include_once 'dbh_inc.php';
$researchid = $_GET['a'];

session_start();
$sql ="select * from research where researchid='".$researchid."' and employeeid='".$_SESSION['employeeid']."';";
$result= $conn->query($sql);

echo '<center><table id="tab">';
while($row = $result->fetch_assoc()){
	echo '<tr><td>Title : '.$row["title"]."</td></tr>";
	echo '<tr><td>Status : '.$row["status"]."</td></tr>";
	echo '<tr><td>Start Date : '.$row["startdate"]."</td></tr>";
	echo '<tr><td>End Date : '.$row["enddate"]."</td></tr>";
}


echo '</center></table>';
$filename="uploads/".$researchid."_research.pdf";
//echo $filename;
if(isset($_POST['logout'])){
	unset($_SESSION['employeeid']);
	header('Location:facultylogin.php');
}

?>

<a href='<?=  $filename ?>' download>
	<button type="button" style="background-color:yellow;margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:0%">
   Click here to download
</button> </a>


</div>





<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



<footer>
  <p>Developed for VIT</p>
</footer>
</body>
</html>





</body>
</html>