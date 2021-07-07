<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Digital Library</title>
  <link rel = "icon" href = "logob.jpeg" type = "image/x-icon">
  <link rel="stylesheet" href="home1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- <a class="navbar-brand" href="#">WebSiteName</a> -->
      <!-- <a class="navbar-brand" href="#"><img src="logo_li.jpeg" height="60px" width="60px" style="border-radius: 30px; border:2px solid white; margin-top:0px;" ></a> -->
      <a class="navbar-brand" href="#"><img src="logo.jpeg" height="35px" width="35px" style="border-radius: 50%; border:2px solid white;"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li ><a  href="section.php">Sections </a>
      </li>
      <li><a href="contact.php">Contact</a></li>
      <!-- <li><a href="about_us.php">About Us</a></li> -->
      <li><a href="feedback.php">Feedback</a></li>
    </ul>
    <?php
            if(isset($_SESSION['login_user']))
            {
                ?>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="">
                    <div style="color: white">
                      <?php
                        echo "<img class='img-circle profile_img' height=30 width=30 src='images/".$_SESSION['pic']."'>";
                        echo " ".$_SESSION['login_user']; 
                      ?>
                    </div>
                  </a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                </ul>
                <?php
               
    }
    ?>
</nav>
</body>
</html>