<?php
include_once 'dbh_inc.php';

session_start();

$employeeid = $_SESSION['employeeid'];
$status= $_POST['status'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$title = $_POST['title'];
$max = '';
$sql=sprintf("insert into research (employeeid,startdate,enddate,title,status) values('%s','%s','%s','%s','%s')",$employeeid,$startdate,$enddate,$title,$status);
//$sql = "INSERT INTO research (employeeid,startdate,enddate,title,status) VALUES ($employeeid,'$startdate','$enddate','$title','$status')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	$sql1 = "SELECT max(researchid) as max FROM research";
	$result = $conn->query($sql1);
	while($row = $result->fetch_assoc()){
		$max = $row['max']+1;
	}

		$target_dir = "uploads/";
		$target_file = $target_dir . $max .'_research.pdf';
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		echo $target_file."\n";
		echo file_exists($target_file)."\n";
		// Check if image file is a actual image or fake image
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}

		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 1000000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}

		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		        header("Location:http://localhost/FRMS/facultyhome.php");
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}



$conn->close();
?>