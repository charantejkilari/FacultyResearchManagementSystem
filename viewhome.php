<!DOCTYPE html>
<html>
<head>
    <title>View home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="topnav">
  <a class="active" href="home.php">Home</a>
</div>

<div class="container" style="background: #eeeeee; padding: 3% 0; border-radius: 10px; max-width: 72em; margin: 15px 15%;">
        <h1 align="center" style="font-size: 4em; margin: 0;">Research Progress <br> Managment System</h1>
</div>


<div class="container" style="margin: 10% 30% 0px 30%;">
    <form class="form-horizontal" method='POST' action='viewpersonal.php'>

  <div class="form-group row">
    <div class="col">
        <label for="search" style="font-weight: bold; color: #2c3e55;" >Search Faculty:</label>
    </div>
    <div class="col">
        <select name="name" placeholder="select" style="margin-bottom: 10px">
            <?php
            include_once 'dbh_inc.php';
            $sql="select name from employee;";
            $result= $conn->query($sql);
            if($result){
                while($x=mysqli_fetch_assoc($result)){
                    echo "<option value='".$x['name']."'>".$x['name']."</option>";
                }

            }
            ?>
        </select>
      <div>
      <br>
        <input type="submit" class="button" href="viewpersonal.php" value="Search">
      </div>
    </div>
  </div>
</form>
</div>

<footer>
  <p>Developed for VIT</p>
</footer>
</body>
</html>