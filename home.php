<?php
  include_once 'booklist.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <link rel = "icon" href = "logob.jpeg" type = "image/x-icon">
  <link rel="stylesheet" href="home1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .table-bordered{
      margin-top: 60px;
      /* margin-left: 30px */
      margin-bottom: 30px;
    }
    .heading{
      text-align: center;
      font-style: italic;
      margin-top: 70px;

      text-shadow: 2px 5px 5px orangered;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="logo.jpeg" height="35px" width="35px" style="border-radius: 50%; border:2px solid white;"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li ><a  href="section.php">Sections </a>
      </li>
      <li><a href="contact.php">Contact</a></li>
      <!-- <li><a href="about_us.php">About Us</a></li> -->
      <li><a href="feedback.php">Feedback</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="welcome">
<marquee><u>Welcome To our digital Library System</u></marquee>
</div>

<?php
      echo  "<h1 class='heading'><u><strong>List of books</strong></u></h1>";
      include 'config.php';
      // include_once 'booklist.php';
      @$res=mysqli_query($connect,"SELECT * FROM `booklist` ");

		echo "<table class='table table-bordered table-hover'>";
			echo "<tr style='background-color: orangered;'>";
				echo "<th style='font-size:30px;'>"; echo "Book ID";	echo "</th>";
				echo "<th style='font-size:30px;'>"; echo "Book-Name";  echo "</th>";
				echo "<th style='font-size:30px;'>"; echo "Authors Name";  echo "</th>";
				echo "<th style='font-size:30px;'>"; echo "Page No.";  echo "</th>";
			echo "</tr>";	

			while(@$row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td style='font-size:25px;'>"; echo $row['bookid']; echo "</td>";
				echo "<td style='font-size:25px;'>"; echo $row['bookname']; echo "</td>";
				echo "<td style='font-size: 25px;'>"; echo $row['authorname']; echo "</td>";
				echo "<td style='font-size:25px;'>"; echo $row['pageno']; echo "</td>";
				echo "</tr>";
			}
		echo "</table>";
		
?>
<footer>
      <p style="text-align: center; font-size:15px;">Copyright &copy; 2021-22 Digital Library</p>
</footer>
</body>
</html>

