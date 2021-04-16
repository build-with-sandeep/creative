<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instapic</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean-1.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>  


<body>
  <div class="overlay"></div>
    <div class="container-fluid header-top">
        <div class="col-md-12" style="padding:0px;">
            <div class="top-menu-logo"><img src="assets/img/logo.jpg" class="center-block" style="height:40px;margin-top:10px;margin-bottom:10px;">
                <div class="menu-buttons">
                <a href="feeds.php">
                    <i class="fa fa-rss fa-2x" aria-hidden="true"></i>
                </a>    
                <a href="my_uploads.php">    
                    <i class="fa fa-upload fa-2x" aria-hidden="true"></i>

                </a>
                <a href="#">
                   <i class="fa fa-user fa-2x" aria-hidden="true"></i> 
                </a>
                </div>
            </div>
        </div>
    </div>


  <div class="container img-container">
    
        <form action="uploads.php" method="post" enctype="multipart/form-data">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">cool!</h6>
              <input type="text" name="caption" style="height: 45px; width: 100%;" >
              <input type="file" name="meme" style="float:left;" ></input> 

              <button type="submit" class="w3-button w3-theme" name="post" style="float: right;"><i class="fa fa-pencil"></i>Post</button> 
            </div>
          </div>
        </form>

    

<?php
include 'db_connection.php';
session_start();
$username = $_SESSION["username"];
$query="SELECT * FROM user_feeds ORDER BY post_time DESC ";
$result=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($result)) {
  echo' <div class="img-div">
            <div class="header"><img class="img-circle" src="'.$row["meme_address"].'">
            
                <label>'.$row["user_name"].'</label>
            </div>
            <div style="height:60%;overflow:hidden;"><img src="'.$row["meme_address"].'"></div>
            <div class="header"><a href="#"><i class="fa fa-heart-o"></i></a><a href="#"><i class="fa fa-comment-o"></i></a></div>
            <div class="more-section">
                <label>10 Likes</label>
                <p><strong>'.$row["user_name"].'</strong>'.$row["captions"].'</p>
            </div>
        </div>';
}


?>

</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>












