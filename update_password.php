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
        .box2
        {
            height: 420px;
            width: 450px;
            background-color: orangered;
            margin: 60px auto;
            opacity: .9;
            color: rgb(207, 199, 199);
            padding: 20px;
        }
        body
        {
            background-image: url(update_pass.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            /* background-attachment: scroll; */
            margin: 0;
            padding: 0;
        }
      </style> 
	</head>
    <body>
        <nav>
            <div id="logo">
                <img src="logob.jpeg">
            </div>
        </nav>
        <section>
       

                <div class="box2">
                    <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console; font-weight: 900;">  Library Management System</h1>
                    <h1 style="text-align: center; font-size: 25px;">Reset Password </h1>
            
                  <form name="Registration" action="" method="post">
                    
                    <div class="login">

                      <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
                      <input class="form-control" type="password" name="npassword" placeholder="New Password" required=""> <br>
                      <input class="form-control" type="password" name="cpassword" placeholder="Confirm Password" required=""> <br>
                      <input class="btn btn-default" type="submit" name="submit" value="Reset" style="color: black; width: 70px; height: 30px"> </div>
                  </form>
                 
                </div>
              </form>
        </section>
    </body>
</html>

<?php
@$user_id1 = $_POST['username'];
// $user_id2 = $_SESSION['login_user'];
  if(isset($_POST['submit']))
  {
    $serach = "SELECT * FROM `registration` WHERE username = '$user_id1'";
    $result = mysqli_query($connect, $serach);
    $row = mysqli_fetch_assoc($result);
    @$token = $row['token'];
    @$user_id2 = $row['username'];
     @$email_id = $row['email'];
    if($_SESSION['checkuser'] == $user_id1){
    if($user_id1 == $user_id2)
    {
      $new = $_POST['npassword'];
      $confirm = $_POST['cpassword'];
      if($new == $confirm)
      {
        $update = "UPDATE `registration` SET password = '$new' WHERE username = '$user_id2'";
        $run = mysqli_query($connect, $update);
        $to = $email_id;
        $txt = "your password is reset";
        $header = "From: digitallibrary149@gmail.com";
        $subject = "reset password";
        $msg = mail($to, $subject, $txt, $header);
        if($run)
        {
          
          header("location:login.php");
        }
      }
      else{
        ?>
            <script type="text/javascript">
              alert("New passowrd and Confirm password must be same.");
            </script>
        <?php
      }
    }else{
      ?>
          <script type="text/javascript">
              alert("You have entered invalid username");
            </script>
      <?php
    }
  }else{
    ?>
          <script type="text/javascript">
              alert("You have entered invalid username");
            </script>
      <?php
  }

  }
?>