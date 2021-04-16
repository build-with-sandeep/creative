<?php
  include 'db_connection.php';
   if(isset($_POST['login'])) 
   {    session_start();

        $username=$_POST['username'];
        $password=$_POST['password'];
        $_SESSION['username']=$username;
        $query="SELECT * FROM user_info WHERE user_name='$username' AND user_password='$password'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)== 1)
            {
              header('location:feeds.php');
            }
        else
            {
               echo '<script>
               alert("sorry !invalid username and password")
               </script>'; 
            }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN|imCreative</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean2.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-clean">
        <form method="post" action="index.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration">
                <img src="assets/img/logo.png"></div>
            <div class="form-group" style="position:relative;">
                <input class="form-control" type="text" name="username" placeholder="username">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" name="login">Log In</button>
            </div>
            <!--<a href="#" class="forgot">Forgot your username or password?</a>
            <span class="forgot" style="color: blue">OR</span>-->
            <a href="sign-up.php" class="forgot">New User ?<span style="color: violet">SignUp here !</span></a>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>