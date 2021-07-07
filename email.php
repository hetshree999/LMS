<?php

session_start();
include_once 'config.php';
// if(isset($_POST['submit']))
// {
    $user_id1 = $_SESSION['User'];
    $email_id = $_SESSION['Email'];
    // $result = mysqli_query($connect,"SELECT * FROM `userinfo` WHERE username='".$_SESSION['User'] ."'");
    // $row = mysqli_fetch_assoc($result);
    // $user_id2 = $row['username'];
    // $email_id = $row['email'];
    // $token = $row['token'];

    // if($user_id1 == $user_id2)
    // {

        $to = $email_id;
        $txt = "Hello, ".$_SESSION['User']." Welcome, to our digital Library.You have registred successfully!!! Hope you will like to read books on our digital library. Thank you for registering yourself.. Give your valuable feedback.";
        $header = "From: digitallibrary149@gmail.com";
        $subject = "welcome message";
        $msg = mail($to, $subject, $txt, $header);
        if($msg){
            include 'alert.php';
        }
        else{
            //echo "failed";
            include 'alert.php';
        }
    // }
// }

?>