<?php

$dbhost = 'localhost';
$dbname = 'maazdb';
$dbusername = 'root';
$dbpassword = '';


$connect = mysqli_connect("$dbhost", "$dbusername", "$dbpassword", "$dbname");

if (isset($_POST['change_btn'])) {

  $email = $_POST['email'];
  $newPass = $_POST['password'];
  $cPass   = $_POST['cpassword'];

  $query = "SELECT * from uacdb WHERE email = '$email'";
  $res = mysqli_query($connect, $query);


  if (mysqli_num_rows($res) == 0) {
    echo ("Data not Found");
  } elseif ($newPass != $cPass) {
    echo ("Password and Confirm Password doesnt Match");
  } else {
    $updateQuery = "update uacdb set password = '$newPass', cpassword = '$cPass' WHERE email = '$email'";
    mysqli_query($connect, $updateQuery);
    echo ("Password Change Successfully");
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

  <title>Change Password</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body class="bg-dark">

  <div class="container" style="width:50%;">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Reset Your Password</div>
      <div class="card-body">
        <form method="POST" action="">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="email" id="e-mail" class="form-control mb-3" name="email" placeholder="Email Address" required="required" autofocus="autofocus">
                </div>
              </div>


              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12">
                    <div class="form-label-group">
                      <input type="password" id="inputPassword" class="form-control mb-3" name="password" placeholder="New Password" required="required">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-label-group">
                      <input type="password" id="confirmPassword" class="form-control mb-3" name="cpassword" placeholder="Confirm password" required="required">
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-wrap" style="display:flex; justify-content:center;">
              <button class="btn btn-primary btn-block" type="submit" name="change_btn">Change Password</button></div>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
        </div>
      </div>
    </div>
  </div>



</body>

</html>