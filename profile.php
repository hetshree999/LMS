<?php
    include 'navbar.php';
	include 'config.php';
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 	<style type="text/css">
 		.wrapper
 		{
 			width: 300px;
 			margin: 0 auto;
 			color: black;
 		}
		 form{
        margin-top: 30px;
        margin-left: 30px;
    }
    input{
        padding-top: 10px;
        padding-bottom: 10px;
        width: 80%;
        padding-left: 20px;
        /* font-size: 100px; */
    }
    input::-webkit-input-placeholder{
        font-size: 20px;
        color: black;
    }
    input:hover{
        background-color: lightgray;
        color:orangered;
        font-size: 20px;
        border-color: orangered;
    }
    .btn{
        font-size: 30px;
    }
 	</style>
 </head>
 <body style="background-image: linear-gradient(to right, #D74177, #FFE98A);">
 	<div class="container">
 		<form action="" method="post">
 			<button class="btn btn-default" style="float: right; width: 90px;" name="submit1">Edit</button>
 		</form>
 		<div class="wrapper">
 			<?php
                $db=mysqli_connect("localhost","root","","userinfo");  
 				if(isset($_POST['submit1']))
 				{
 					?>
 						<script type="text/javascript">
 							window.location="edit.php"
 						</script>
 					<?php
 				}
 				$q=mysqli_query($db,"SELECT * FROM registration where username='$_SESSION[login_user]' ;");
 			?>
 			<h2 style="text-align: center;">My Profile</h2>

 			<?php
 				$row=mysqli_fetch_assoc($q);

 				echo "<div style='text-align: center'>
 					<img class='img-circle profile-img' height=110 width=120 src='images/".$_SESSION['pic']."'>
 				</div>";
 			?>
 			<div style="text-align: center;"> <b>Welcome, </b>
	 			<h4>
	 				<?php echo $_SESSION['login_user']; ?>
	 			</h4>
 			</div>
 			<?php
 				echo "<b>";
 				echo "<table class='table table-bordered'>";
	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> First Name: </b>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo $row['firstname'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Last Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['lastname'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> User Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['username'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Password: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['password'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Email: </b>";	
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['email'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Contact: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['mobileno'];
	 					echo "</td>";
	 				echo "</tr>";
 				echo "</table>";
 				echo "</b>";
				 ?>
				 <div class="container" style="width:90%;">
				<h2>Add your book...</h2>
				<!-- Trigger the modal with a button -->
				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add book</button>

				<!-- Modal -->
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" style="font-size:30px;">Fill this form for add your book...</h4>
						</div>
						<div class="modal-body">
						<form action="profile.php" method="POST">
							<input type="text" placeholder="Book name" required class="bname" name="bname"><br><br>
							<input type="text" placeholder="Author name" required class="aname" name="aname"><br><br>
							<input type="number" placeholder="Total Pages" required name="pno"><br><br>
							<input type="file" required class="btn" name="myfile"><br><br>
							<input type="submit" value="Submit" name="submit">
						</form>
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
    </div>
  </div>
</div>
 		</div>
 	</div>
 </body>
 </html>

 <?php

@$bname = $_POST['bname'];
@$aname = $_POST['aname'];
@$page = $_POST['pno'];
@$book = $_POST['book'];
@$submit = $_POST['submit'];

if(isset($bname) && isset($aname) && isset($page) )
{
    $insert = "INSERT INTO `booklist`(`bookname`, `authorname`, `pageno`) VALUES ('$bname', '$aname','$page') ";
    $q = mysqli_query($connect,$insert);
	if($q)
	{
		echo "************";
	}
	else
		echo "Failed";
    @$name = $_FILES['book']['name'];
    @$type = $_FILES['book']['type'];
    @$size = $_FILES['book']['size'];
    @$tmp_name = $_FILES['book']['tmp_name'];
    if(isset($name))
    {
        if(!empty($name))
        {
            $location = 'C:\xampp\htdocs\hetshree\final';
            if(move_uploaded_file($tmp_name,$location.$name))
            {
                
            }
            else{
                echo "Sorry, something went wrong";
            }
        }else{
            echo "Kindly upload a file";
        }
    }
}

?>