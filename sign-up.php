<?php
  include 'db_connection.php';
  if(isset($_POST['signup']))
  {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $insert_details="INSERT INTO user_info VALUES('','$username','$email','$password')";
    $result=mysqli_query($conn,$insert_details);
    if(!$result)
        { 
            $error= mysqli_error($conn);
            echo '<script>alert("'.$error.'")</script>';
        }

    else {
        header('location:home.php');
     }  
      
      

  }


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imCreative</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean2.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img src="assets/img/logo.png"></div>
            <div class="form-group">
                <input class="form-control" type="text" name="username" required="" placeholder="Username" maxlength="20" minlength="4">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" required="" placeholder="Email" maxlength="100" minlength="6">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" required="" placeholder="Password" maxlength="20" minlength="4">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" name="signup">Create Account</button>
            </div><a href="index.php" class="forgot">Already got an account? <span style="color: violet">Login here ...</span></a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>