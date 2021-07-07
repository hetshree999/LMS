<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Science</title>
    <link rel = "icon" href = "logob.jpeg" type = "image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body{
            background-image: linear-gradient(to bottom, rgb(85,255,255), rgb(17,119,255) );
        }
        /* .container{ */
            /* padding-top: 10px; */
        /* } */
        /* .second{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        } */
        /* .image,.info{
            display: flex; 
             flex-wrap: wrap;
        } */
        /* .image{
            margin-left: -10%;
        } */
        /* .image1{
            /* margin-left: 5.5%; */
        /* } */
        /* .image1 img{ */
            /* height: 300px; */
            /* width: 200px; */
        /* } */
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
            <img src="quantom gravity5.jpg">
        
        <div class="info">
            <span>
            <h2>QUANTUM GRAVITY </h2><br>
            <p>Edited by</p>
            <p>Rodrigo Sobreiro</p>
            <button type="button" id="btn">Read</button>
            </span>
        </div>
        </div>
        <div class="image">
            <img src="astronomy.jpg">
        
        <div class="info">
            <span>
            <h2>Astronomy</h2><br>
            <p>Presented by</p>
            <p>ANDREW FRAKNOI</p>
            <button type="button" id="btn">Read</button>
            </span>
        </div>
        </div>
        <div class="image">
            <img src="fibers2.jpg">
        
        <div class="info">
            <span>
            <h2>Fibre to Fabric</h2><br>
            <p>Presented by</p>
            <p>Seema Sekhri</p>
            <button type="button" id="btn">Read</button>
            </span>
        </div>
        </div>
        <div class="image">
            <img src="general science.JPG">
        
        <div class="info">
            <span>
            <h2>General Science</h2><br>
            <p>Presented by</p>
            <p>Rajiv Arun Patole</p>
            <button type="button" id="btn">Read</button>
            </span>
        </div>
        </div>
        
            <?php
            $server = "localhost";
            $user = "root";
            $pass = "";
            $db = "userinfo";

            $connect = mysqli_connect($server, $user, $pass, $db);

            $sql = "CREATE TABLE `infopdf` (`field` int(11) NOT NULL AUTO_INCREMENT,
                                            `filename` VARCHAR(150) NOT NULL,
                                            `directory` VARCHAR(150) NOT NULL,
                                            PRIMARY KEY (`field`))AUTO_INCREMENT = 1";
            $query = mysqli_query($connect, $sql);

            $select = "SELECT * FROM `infopdf`";
            $result = $connect->query($select);
            while($row = $result->fetch_object()){
                $pdf = $row->filename;
                $path = $row->directory;
                
            }
        ?> 
        
    </div>
 
</body>
</html>