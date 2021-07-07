<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poem section</title>
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
            <img src="poem4.jpg">
        <div class="info">
            <span>
            <h2>POEM COLLECTION</h2><br>
            <p>Presented by</p>
            <p>William Butler Yeats</p>
            <a href="poem1.pdf" target="_poem1">Read</button></a>
            </span>
            </div>
    </div>
    <div class="image">
            <img src="poem2.jpg">
        <div class="info">
            <span>
            <h2>THE POEMS OF SHAKESPEARE</h2><br>
            <p>Presented by</p>
            <p>SHAKESPEARE</p>
            <a href=""><button type="button" id="btn">Read</button></a>
            </span>
            </div>
        </div>
    </div>
 
</body>
</html>