<?php
  session_start();
  include 'config.php';
?>
<!Doctype html>
<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="style.css" />
        <link rel = "icon" href = "logo.jpeg" type = "image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <style type="text/css">
        section
        {
          margin-top: -20px;
        }
        .box3
        {
            height: 100px;
            width: 450px;
            background-color: rgb(8, 120, 128);
            margin: 60px auto;
            margin-top: -5%;
            opacity: .9;
            color: rgb(207, 199, 199);
            padding: 20px;
        }
      </style> 
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
    background-color: #5cb85c;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }
  </style>
	</head>
    <body>
        <nav>
            <div id="logo">
                <img src="logob.jpeg">
            </div>
            <div id="signup">
            <a href="sign_up.php"><img src="sign up3.jpg"></a>
            </div>
        </nav>
        <section>
                <div class="box1">
                    <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console; font-weight: 900;">  Library Management System</h1>
                    <h1 style="text-align: center; font-size: 25px;">User Login Form</h1>
            
                    <div class="login">
                  <form name="Registration" action="" method="post">
                    

                      <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
                      <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
                      <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px"> </div>
                  </form>
                  </div> 
                  <div class="box3">
                  <p class="forget" style="margin-left:20px;font-size:30px; margin-top:20px; color:white;">Forget Password? <button type="button" class="btn btn-default btn-lg" id="myBtn">Click here</button>
                  </p></div>
                  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4> Confirmation</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form method="POST" action="">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter username" name="confirmuser">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-envelope"></span> Email</label>
              <input type="email" class="form-control" id="psw" placeholder="Enter email" name="confirmemail">
            </div>
              <button type="submit" class="btn btn-success btn-block" name="sub"><span class="glyphicon glyphicon-off"></span>Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
    
    </div>

  <script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>

<?php
include 'config.php';
    if(isset($_POST['sub'])){
        $cuser = $_POST['confirmuser'];
        $cemail = $_POST['confirmemail'];
        $check = "SELECT * FROM `registration` WHERE `username`='$cuser' && `email`='$cemail'";
        $result = mysqli_query($connect,$check);
        $num = mysqli_num_rows($result);
    
        if($num == 1)
        {
            $_SESSION['e-mail'] = $cemail;
            @$token = $_SESSION['token']; 
            $to=$cemail;
            $txt = "Hello, " .$cuser . " Click http://localhost/hetshree/final/update_password.php?token=$token to reset password";
        $header = "From: digitallibrary149@gmail.com";
        $subject = "reset password";
        $msg = mail($to, $subject, $txt, $header);
        
        if($msg)
        {
          $_SESSION['checkuser']=$cuser;
            $_SESSION['msg'] = 'password link sent';
            ?>
              <script type="text/javascript">
              alert("Check your email. The link is sent on your registered email address.");
            </script>
            <?php
        }
        else{
            ?>
                <script type="text/javascript">
              alert("Sorry, Something went wrong. Please, try again");
            </script>
            <?php
        }
        }
        else{
            ?>
                <script type="text/javascript">
                alert(" Invalid Username or Email address");
                </script>
            <?php
        }
    }
    ?>
        </div>
        </section>
        <?php

    if(isset($_POST['submit']))
    {
      $db=mysqli_connect("localhost","root","","userinfo"); 
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `registration` WHERE username='$_POST[username]' && password='$_POST[password]';");
      
      $row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
          <div class="alert alert-danger" style="width: 600px; margin-left: 470px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
          </div>    
        <?php
      }
      else
      {
        $_SESSION['login_user'] = $_POST['username'];
        $_SESSION['pic']= $row['profile'];
        

        ?>
          <script type="text/javascript">
            window.location="home.php"
          </script>
        <?php
      }
    }

  ?>

    </body>
</html>

              