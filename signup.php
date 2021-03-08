<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <style>
  body{
  padding-top: 70px;
  color: #2c3e55;
  padding-bottom: 100px;
}
.navbar-inverse{
  background: #2c3e55;
}

#content{
  text-align: center;
  padding: 15%;
}
.jumbotron{
  color: #2c3e55;
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
        <a href="http://localhost/FRMS/home.php" class="navbar-brand">Home</a>
      </div>
    </div>
  </nav>

<div class="container"> 
  <div class="jumbotron">
    <h1 align="center">Employee research progress managment system</h1>
    <?php if (isset($_GET['error'])) { ?>
	<p class="err"><?php echo $_GET['error']; ?></p>
    <?php } ?>

  </div>
</div>


<div class="container"> 
	<form class="form-horizontal" name="reg" action ="signup_inc.php" method = "POST">

  <div class="form-group">
    <label for="Name" class="col-sm-2 control-label">Name : </label>
    <div class="col-sm-10">
      <input type="text" name ="name" class="form-control" id="Name" placeholder="Name">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email : </label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Username : </label>
    <div class="col-sm-10">
      <input type="text" name="username"class="form-control" id="Username" placeholder="Username">
    </div>
  </div>


  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password : </label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10" >
      <input type="submit" name="submit" value="Submit" href="http://localhost/FRMS/facultyhome.php" class="btn btn-success" >
    </div>
  </div>
</form>
</div>

<footer>
  <p>Developed for VIT</p>
</footer>
</body>
</html>

