<?php
include 'db_connection.php';
if(isset($_POST['post'])){
            session_start();
            $username=$_SESSION['username'];
            $caption= $_POST['caption'];
            $datetime=date('y-m-d H:i:s');
            $memename=$_FILES['meme']['name'];
            $memetempname=$_FILES['meme']['tmp_name'];
            $memedestination='memes/'.$memename.'.jpg';
            move_uploaded_file($memetempname, $memedestination);
            
            $query="INSERT INTO user_feeds VALUES('','$username','$caption','$memename','$memedestination','$datetime')";
            
            $res=mysqli_query($conn,$query);
            if($res)
            {
                echo '<script>alert("content inserted successfully")</script>';
                header('location:feeds.php');
            }
            else 
                echo'<script>alert("'.mysqli_error($conn).'")</script>';
          
        }
        
    
?>
