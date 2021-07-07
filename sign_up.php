<!Doctype html>
<html>
    <head>
        <title>Sign Up page</title>
        <link rel="stylesheet" href="sign_up.css" />
        <link rel = "icon" href = "logob.jpeg" type = "image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <style type="text/css">
        section
        {
          margin-top: -20px;
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
          <div class="reg_img">

                <div class="box2">
                    <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console; font-weight: 900;">  Library Management System</h1>
                    <h1 style="text-align: center; font-size: 25px;">User Registration Form</h1>
            
                  <form name="Registration" action="" method="post">
                    
                    <div class="login">
                      <input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
                      <input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br>
                      <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
                      <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
                      <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
                      <input class="form-control" type="text" name="contact" placeholder="Mobile No" required=""><br>
                      <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> </div>
                  </form>
                 
                </div>
              </div>
              </form>
        </section>

    </body>
</html>

<?php
  include 'config.php';
  // include 'booklist.php';
  // @$userid = $_POST['id'];
@$firstname = $_POST['first'];
@$lastname = $_POST['last'];
@$username = $_POST['username'];
@$password = $_POST['password'];
@$email = $_POST['email'];
@$contact = $_POST['contact'];
  
      
            
//Generate a random string.
$token = openssl_random_pseudo_bytes(16);

//Convert the binary data into hexadecimal representation.
$token = bin2hex($token);
$token = bin2hex($token);
if(isset($firstname) && isset($lastname) && isset($username) && isset($password) && isset($email) && isset($contact))
{
    if( !empty($firstname) && !empty($lastname) && !empty($username) && !empty($password) && !empty($email) && !empty($contact) )
    {
        // $check = "SELECT * FROM registration WHERE userID = '$userid'";
        // $cquery = mysqli_query($connect, $check);
        // $num1 = mysqli_num_rows($cquery);

        // $check2 = "SELECT * FROM registration WHERE email = '$email'";
        // $c2query = mysqli_query($connect, $check2);
        // $num2 = mysqli_num_rows($c2query);
        $check4 = "SELECT * FROM registration WHERE username = '$username'";
        $c4query = mysqli_query($connect, $check4);
        $num1 = mysqli_num_rows($c4query);

        // $check3 = "SELECT * FROM registration WHERE password = '$password'";
        // $c3query = mysqli_query($connect, $check3);
        // $num2 = mysqli_num_rows($c3query);


        if($num1 == 0)
        {
            $insertdata = "INSERT INTO `registration`
               (`firstname`, `lastname`, `username`,`password`, `email`,`profile`, `mobileno`, `token`)
               VALUES ('$firstname', '$lastname', '$username', '$password', '$email', 'p.jpg', '$contact', '$token')";

            $queryinsert = mysqli_query($connect, $insertdata);
            if($queryinsert)
            {
              session_start();
              $_SESSION['User'] = $username;
              $_SESSION['Email'] = $email;
              $_SESSION['token'] = $token;

              include 'email.php';
              header("location:login.php");
            }
            ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        }
        
          <?php 
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
            <?php
    }
}
}
?>


