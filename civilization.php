<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civilization</title>
    <link rel = "icon" href = "logob.jpeg" type = "image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body{
            background-image: linear-gradient(to bottom, rgb(85,255,255), rgb(17,119,255) );
        }
        .info{
            padding-left: 10%;
        }
        .image{
            display: flex;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .image img{
            height: 300px;
            width: 200px;
        }
        .info p{
            font-size: 20px;
        }
        #btn{
            width:60px;
            border-radius: 4px;
        }
        #btn:hover{
            color:white;
            background-color: gray;
            width: 80px;
        }
    </style>
</head>
<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="container">
        <div class="image">
            <img src="book/civilization/adivasi sanskrutic varso.png">
        
        <div class="info">
            <span>
            <h2>Adivasi Sanskrutik Varso</h2><br>
            <p>Written by</p>
            <p>Dr. Bhagvandas Patel</p>
            <small>Language : Gujarati</small><br><br>
            <button type="button" id="btn">Read</button>
            </span>
        </div>
        </div>
        <div class="image">
            <img src="book/civilization/Suvarnadvipa.jpg"> 
        <div class="info">
            <span>
            <h2>Suvarnadvipa </h2><h3>Ancient Indian Colonies In The Far East</h3><br>
            <p>Written by</p>
            <p>R.C. Majumdar</p>
            <small>Language : English</small><br><br>
            <a href=""><button type="button" id="btn">Read</button></a>
            </span>
            </div>
        </div>
        <div class="image">
            <img src="book/civilization/Ancient India in Historical Outline.jfif"> 
        <div class="info">
            <span>
            <h2>Ancient India in Historical Outline</h2><br>
            <p>Written by</p>
            <p>D.N.Jha</p>
            <small>Language : English</small><br><br>
            <a href=""><button type="button" id="btn">Read</button></a>
            </span>
            </div>
        </div>
        <div class="image">
            <img src="book/civilization/maya-mohenjo-daro.jpg">
        
        <div class="info">
            <span>
            <h2>A day in the Life of Maya of Mohenjo-Daro</h2><br>
            <p>Written by : Mulak Raj Anand</p>
            <p>Illustrated by : Pulak Biswas</p>

            <small>Language : English</small><br><br>
            <button type="button" id="btn">Read</button>
            </span>
        </div>
        </div>
    </div>
 
</body>
</html>