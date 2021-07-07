<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
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
            <img src="history1.jpg">
        <div class="info">
            <span>
            <h2>A STORY OF BRITISH EMPIRE</h2><br>
            <p>Presented by</p>
            <p>P.J.Marshall</p>
            <a href=""><button type="button" id="btn">Read</button></a>
            </span>
            </div>
    </div>
    <!-- <div class="container"> -->
        <div class="image">
            <img src="history2.jpeg">
        <div class="info">
            <span>
            <h2>COMMUNAL CONFLICT IN INDIA</h2><br>
            <p>Presented by</p>
            <p>Priti Sahai</p>
            <button type="button" id="btn">Read</button>
            </span>
        </div>
        </div>
    <div class="image">
            <img src="history3.jpeg">
        <div class="info">
            <span>
            <h2>FROM HERE TO FOREVER</h2><br>
            <p>Presented by</p>
            <p>ELLEN G. WHITE</p>
            <a href=""><button type="button" id="btn">Read</button></a>
            </span>
            </div>
        </div>
        <div class="image">
            <img src="history4.jpeg">
        <div class="info">
            <span>
            <h2>ISSUE IN TWENTITH-CENTURY (WORLD HISTORY)</h2><br>
            <p>Presented by</p>
            <p>Sneh Mahajan</p>
            <a href=""><button type="button" id="btn">Read</button></a>
            </span>
            </div>
        </div>
    </div>
 
</body>
</html>