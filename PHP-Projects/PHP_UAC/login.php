<?php

$dbhost = 'localhost';
$dbname = 'maazdb';
$dbusername = 'root';
$dbpassword = '';


$connect = mysqli_connect("$dbhost", "$dbusername", "$dbpassword" , "$dbname");

if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

    $sql = "SELECT * FROM uacdb WHERE `email`='{$email}' AND password='{$password}'";
    $query = mysqli_query($connect, $sql);

    if ($query->num_rows > 0) {
      header("Location: welcome.php");

    } else {
      echo '<script>alert("Invalid Login Credentials. If you dont have account then create one.")</script>';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UAC-Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>
<style>

body{
  background-image: url(img/tp.jpg);
  max-width: 100%;
  height: auto;
}
.card-header{
  background-color: purple;
  font-size: 30px;
  color: orchid;
  text-align: center;
}
.card-header:hover{
  font-size: 40px;
}
.card-body{
  background-color: silver;
}
.btn-primary{
  background-color: purple;
  color: orchid;
}
.btn-primary:hover{
  background-color: purple;
  color: orchid;
}
.btn-primary:active{
  background-color: purple;
  color: orchid;
}
.btn-primary:focus{
  background-color: purple;
  color: orchid;
}
a:hover{
  color: purple;
}

</style>
<body>

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">UAC Login</div>
      <div class="card-body">
        <form method="POST" action="welcome.php">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="create.php">Register an Account</a>
            <a class="d-block small mt-3" href="changepassword.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
