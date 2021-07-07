<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Environment </title>
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
            <img src="evs.jpg">
        
        <div class="info">
            <span>
            <h2>Environmental Science</h2><br>
            <p>Presented by</p>
            <p>Dr. Y. K. sinh</p>
            <button type="button" id="btn">Read</button>
            </span>
        </div>
        </div>
        <div class="image">
            <img src="Environment_ung.jpeg">
        
        <div class="info">
            <span>
            <h2>Environmental Studies</h2><br>
            <p>Presented by</p>
            <p>Erach Bharucha</p>
            <button type="button" id="btn">Read</button>
            </span>
        </div>
        </div>
        <div class="image">
            <img src="air_pollu.JPG">
        
        <div class="info">
            <span>
            <h2>Air Pollution</h2><br>
            <p>Presented by</p>
            <p>Daniel vallero</p>
            <button type="button" id="btn">Read</button>
            </span>
        </div>
        </div>
        <div class="image">
            <img src="water pollution.JPG">
        
        <div class="info">
            <span>
            <h2>Water Pollution</h2><br>
            <p>Edited by</p>
            <p>Erach Bharucha</p>
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