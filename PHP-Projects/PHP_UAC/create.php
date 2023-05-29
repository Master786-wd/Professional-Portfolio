<?php
$conn = new mysqli ("localhost", "root", "","maazdb");

if(isset($_POST['save']))
{
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  if($password === $cpassword && $fname !== '' && $lname !== '' && $email !== '' && $password !== '' && $cpassword !== ''){

     $sql = "INSERT INTO uacdb(fname,lname,email,password,cpassword) VALUES('$fname', '$lname','$email', '$password', '$cpassword')";
 	   if ($conn->query($sql) === TRUE)
     echo '<script>alert("Registration Successful")</script>';
     header("Location: login.php");
   }else{

     echo '<script>alert("Please Provide Correct Information")</script>';
   }


 }

if(isset($_POST['update']))
{
  $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
  $cpassword = $_POST['cpassword'];


$update = "UPDATE uacdb SET fname = '$fname' , lname = '$lname' , email = '$email' , password = '$password' , cpassword = '$cpassword' WHERE email = '$email'";

if ($conn->query($update) === TRUE) {
  echo '<script>alert("Record Updated!")</script>';
} else {
  echo '<script>alert("Error Updating record...")</script>'. $conn->error;
}

$conn->close();
}


if(isset($_POST['delete']))
{
  $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
  $cpassword = $_POST['cpassword'];


$delete = "DELETE FROM uacdb WHERE email = '$email'";

if ($conn->query($delete) === TRUE) {
  echo '<script>alert("Record Deleted!")</script>';
} else {
  echo '<script>alert("Error Deleting Record...")</script>'. $conn->error;
}

$conn->close();
}

if(isset($_POST['search']))
{
  $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

  $sql = "SELECT * FROM uacdb WHERE (fname ='$fname' OR lname ='$lname' OR email = '$email' OR password = '$password')";
  if($result = mysqli_query($conn, $sql)){
      if(mysqli_num_rows($result) > 0){
         echo '<center>'.'<div class= "tl">'. "<table>";
              echo "<tr>";
                  echo "<th>First Name</th>";
                  echo "<th>Last Name</th>";
                  echo "<th>E-mail</th>";
                  echo "<th>Password</th>";
                  echo "<th>Confirm Password</th>";
              echo "</tr>";
          while($row = mysqli_fetch_array($result)){
              echo "<tr>";
                  echo "<td>" . $row['fname'] . "</td>";
                  echo "<td>" . $row['lname'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['password'] . "</td>";
                  echo "<td>" . $row['cpassword'] . "</td>";
              echo "</tr>";
          }
          echo "</table>".'</div>'.'</center>';

          mysqli_free_result($result);
      } else{
          echo '<script>alert("No Record Matching Your Query...")</script>';
      }
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }


  mysqli_close($conn);
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

  <title>Users Account Control</title>


  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


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
#two{
background-color: green;
color: black;
}
#three{
  background-color: red;
  color: black;
}
.btn-primary{
  color: black;
}
.btn-primary:hover{
font-size: 30px;
color: black;
}
input[type=text]:focus{
font-size: 25px;
border-width: 3px;
border-color: orangered;
}
input[type=email]:focus{
font-size: 25px;
border-width: 3px;
border-color: orangered;
}
input[type=password]:focus{
font-size: 25px;
border-width: 3px;
border-color: orangered;
}
a{
  text-align: center;
}
a:hover{
  color: purple;
}
#four{
  color: black;
}
.btn-warning:hover{
  font-size: 30px;
}
.tl{
  width: 500px;
  height: auto;
  background-color: white;
  margin-left: 20px;
  margin-top: 15px;


}
table,th,td{
  border: 2px solid purple;
  text-align: center;
}
</style>


<body>

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">UAC Registeration</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" name="fname" class="form-control" placeholder="First name" autofocus="autofocus">
                  <label for="firstName">First name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" name ="lname" class="form-control" placeholder="Last name">
                  <label for="lastName">Last name</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" name="cpassword" class="form-control" placeholder="Confirm password">
                  <label for="confirmPassword">Confirm password</label>

                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-warning btn-block" name="search" id="four">Search&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
        <button type="submit" class="btn btn-primary btn-block" name="save"> Register</button>
        <button type="submit" class="btn btn-primary btn-block" name="update" id="two"> Update </button>
        <button type="submit" class="btn btn-primary btn-block" name="delete" id="three" > Delete </button>
        <a class="d-block small mt-3" href="login.php">Login Here!</a>
        </form>
      </div>
    </div>
  </div>
</div>
<br>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
