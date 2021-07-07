<?php
    include 'navbar.php';
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="feedback.css"> -->
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
   
    <link rel = "icon" href = "logo.jpeg" type = "image/x-icon">
    <title>Feedback</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
*{
    margin: 0;
    /* margin-left: 50px; */
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
    outline: none;
    color: #fff;
}
body{
    height: 100%;
    width: 100%;
    background: url(feedback.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

/* body{
    display: flex;
    min-height: 100vh;
    align-items: center;
    justify-content: center;
} */

.container{
    width: 380px;
    background: #000;
    box-shadow: 0 0 8px rgb(250, 250,250, 0.6);
    opacity: 0.6;
    margin-left: 40%;
    margin-top: 1%;
    margin-bottom: 2%;
}

.container form{
    width: 100%;
    text-align: center;
    padding: 25px 20px;
}

form h1{
    padding: 10px 0;
}

form .id{
    position: relative;
}

.id i{
    position: absolute;
    font-size: 20px;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

form input{
    width: 100%;
    height: 50px;
    padding-right: 45px;
    margin: 4px 0;
    border: 1px solid #5c5c5c;
    border-radius: 3px;
    background: #181717;
    padding: 0 15px;
    font-size: 20px;
}

form textarea{
    padding: 5px 15px;
    border: 1px solid #5c5c5c;
    border-radius: 3px;
    background: #181717;
    /* padding: 0 15px; */
    font-size: 20px;
    width: 100%;
    margin: 4px 0;
}

form button{
    margin-top: 5px;
    border: none;
    background: #00fff0;
    color: #222;
    padding: 10px 0px;
    width: 100%;
    font-size: 20px;
    font-weight: 800;
    cursor: pointer;
    border-radius: 3px;
}

form input:focus, 
form textarea:focus{
    border: 1px solid #00fff0;
    color: #00fff0;
    transition: all 0.3s ease;
}

form input:focus::placeholder, 
form textarea:focus::placeholder{
    padding-left: 4px;
    color: #00fff0;
    transition: all 0.3s ease;
}
    </style>
</head>
<body>
    <section>
    <div class="container">
        <form method="POST" action="">
            <h1>Give your Feedback</h1>
            <div id="id"><i class="far fa-user"></i> 
            <input type="text" name="username" placeholder="User name" required>
            </div>
            <div id="id">
                <i class="far fa-envelope"></i>
                <input type="email" name="email" placeholder="Email address" required>
            </div>
            <textarea cols="15" rows="5" placeholder="Enter your opinions here.." name="feedback"></textarea>
            <button type="submit" name="submit">SEND</button>
        </form>
    </div>
</section>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    @$email = $_POST['email'];
    @$usern = $_POST['username'];
    @$feed = $_POST['feedback'];
    $insert = "INSERT INTO `feedback`
               (`email`,`username`,`feedback`) VALUES ('$email','$usern','$feed')";
    $sql = mysqli_query($connect,$insert);
    if($sql)
    {
        ?>
        <script type="text/javascript">
              alert("Thanks for giving us your feedback.");
            </script>
        <?php
    }
}
?>