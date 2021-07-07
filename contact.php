<?php
    include 'navbar.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="feedback.css"> -->
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Lobster&family=Teko&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Dancing+Script:wght@500&family=Lobster&family=Teko&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link rel = "icon" href = "logob.jpeg" type = "image/x-icon">
    <title>Contact us</title>
    <style>
       body{
           /* background:#66cdaa; */
           background-image: url('contact1.jpeg');
           background-size: cover;
       }
        .in-color{
            background: #2867B2;
            width: 58px;
            height: 58px;
            color: white;
            text-align: center;
            padding-top: 4px;
            border-radius: 28%;
        }
        .blue-color{
            color:blue;
            background-color:white;
            border-radius: 52%;
            height: 55px;
        }
        .skin-color{
            color: maroon;
        }
        .black-color{
            color:black;
        }
            #icon {
            margin: 1px;
            width: 55px;
            height: 57px;
            border-radius: 15px;
            text-align: center;
            color: white;
            background: linear-gradient(to top right, yellow 0%, yellow 5%, red 45%, #ff1493 60%, #1e90ff 90%);
            }
            .box1{
                display: flex;
                flex-direction: column;
                width: 390px;
                height: 450px;
                border: 2px solid red;
                box-shadow: 0 0 25px red;
                font-family:'cursive';
                margin: 10px;
                margin-top: 2%;
                align-items: center;
                text-align: justify;
                padding: 10px;
                border-radius: 15px;
                /* background: linear-gradient(to top, #0066cc 50%, #66ffff 50%); */
                background: linear-gradient(to top,#8FD8D8 50%, white 50%);
                background-size: 100% 200%;
                transition: all .8s;
            }
            .columns{
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
                box-sizing: border-box;
            }
            .box1:hover{
                background-position: left bottom;
                color: black;
                border: none;
                box-shadow: 0 0 25px #8FD8D8;
            }
            .box1 .contact .contact_logo{
                transform: translateY(40px);
                transition:0.5s;
                opacity: 0;
            }
            .box1 .contact .contact_logo:hover{
                /* padding:10px; */
                transform: translateY(0px);
                opacity: 1;
            }
    </style>
</head>
<body>
    <h2 style="text-align:center; font-size:45px; color: white; text-shadow: 2px 5px 5px red;">Our Team</h2>
    <h4 style="text-align:center; margin-left: 150px; margin-right: 150px; font-weight: bold; font-size: 30px; color:white;"><i>"A successful website does three things: It attracts the right kinds of visitors.Guides them to the main services or product you offer. Collect Contact details for future ongoing relation."</i></h4>
    <div class="columns">
        <div class="box1">
            <h2><b style="font-size: 28px; font-family: 'Lobster', cursive;">Hetshree Parmar</b></h2>
            <img style="border-radius:30%; height:130px; width:130px;" src="myp.jpg">
            <h4><b style="font-size: 25px; font-family: 'Courgette', cursive;">Web Developer</b></h4>
            <h4 style="font-weight: bold; font-size: 20px;"> &nbsp; &nbsp; She is a excellent web developer who specializes in creating beautiful web pages. She knows languages named HTML, CSS, PHP, Bootstrap. Thank you. </h4>
            <div class="contact">
                <div class="contact_logo">
                    <a href="#"><i class="fab fa-linkedin fa-4x in-color"></i></a> &nbsp;
                    <a href="#"><i class='fab fa-facebook fa-4x blue-color'></i></a> &nbsp;
                    <a href="#"><i class="fa fa-instagram fa-4x" id="icon"></i></a> &nbsp;
                    <a href="#"><i class="fas fa-envelope fa-4x skin-color"></i></a>&nbsp;
                    <a href="#"><i class='fab fa-github fa-4x black-color'></i> </a>&nbsp;
                </div>
            </div>
        </div>
        <div class="box1">
        <h2><b style="font-size: 28px; font-family: 'Lobster', cursive;">Foram Dalsaniya</b></h2>
            <img style="border-radius:30%; height:130px; width:130px;" src="foramp.jpeg">
            <h4><b style="font-size: 25px;font-family: 'Courgette', cursive; ">Web Developer</b></h4>
            <h4 style="font-weight: bold; font-size: 20px;"> &nbsp; &nbsp; She is a excellent web developer who specializes in creating beautiful web pages. She knows languages named HTML, CSS, PHP, Bootstrap. Thank you. </h4>
            <div class="contact">
                <div class="contact_logo">
                    <a href="#"><i class="fab fa-linkedin fa-4x in-color"></i></a>&nbsp;
                    <a href="#"><i class='fab fa-facebook fa-4x blue-color'></i></a> &nbsp;
                    <a href="#"><i class="fa fa-instagram fa-4x" id="icon"></i> </a>&nbsp;
                    <a href="#"><i class="fas fa-envelope fa-4x skin-color"></i> </a>&nbsp;
                    <a href="#"><i class='fab fa-github fa-4x black-color'></i> </a>&nbsp;
                </div>
            </div>
        </div>
        <div class="box1">
        <h2><b style="font-size: 28px; font-family: 'Lobster', cursive;">Amisha Thummar</b></h2>
            <img style="border-radius:30%; height:130px; width:130px;" src="amisha2.jpeg">
            <h4><b style="font-size: 25px; font-family: 'Courgette', cursive;">Web Developer</b></h4>
            <h4 style="font-weight: bold; font-size: 20px;"> &nbsp; &nbsp; She is a excellent web developer who specializes in creating beautiful web pages. She knows languages named HTML, CSS, PHP, Bootstrap. Thank you. </h4>
            <div class="contact">
                <div class="contact_logo">
                    <a href="#"><i class="fab fa-linkedin fa-4x in-color"></i></a>&nbsp;
                    <a href="#"><i class='fab fa-facebook fa-4x blue-color'></i></a> &nbsp;
                    <a href="#"><i class="fa fa-instagram fa-4x" id="icon"></i></a> &nbsp;
                    <a href="#"><i class="fas fa-envelope fa-4x skin-color"></i> </a>&nbsp;
                    <a href="#"><i class='fab fa-github fa-4x black-color'></i> </a>&nbsp;
                </div>
            </div>
        </div>
    </div>
</body>
</html>