<?php
 session_start();
	if(isset($_SESSION['nid']) && isset($_SESSION['pass']))
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="REG";
    $temp=0;

    $dbs = mysqli_connect($servername, $username, $password, $dbname);
    if (!$dbs) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $Nid=$_SESSION['nid'];
    $Ps=$_SESSION['pass'];






    $sql= "SELECT * FROM freeze";
    $result=mysqli_query($dbs,$sql);

  while($row=mysqli_fetch_assoc($result))
        $temp=$row["value"];
        if ($temp==1) {
          // code...
        }
        else {
          header("Location: warning.html");
        }

    mysqli_close($dbs);
  }

	else {
    echo"<script>alert('Please Log In first!')</script> ";
   header("Location: signpage.html");

	}

?>
<html lang="en">
  <head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Homepage</title>
 </head>
 <style>
   a:hover
   {
     background-color: #f2f2f2;
   }
   .btn
   {
     background-color: #66d9ff;
     text-align: center;
     padding: 7px;
     border: none;
		 margin: center;
   }
   .vote
   {
     background-color: rgba(239,57,50,1);
		color: rgba(133,32,28,1);
		border-color: rgba(133,32,28,.2);

     display: block;
     margin: 20px auto;
     text-align: center;

     padding: 50px 50px 50px 50px;
     width: 300px;
     height: 75%;
     outline: none;
     color: white;
     font-size: 50px;
		 text-shadow: 0 1px 0 rgba(255,255,255,.7);
     font-family: "Hammersmith One", sans-serif;
     border-radius: 200px;
     text-transform: uppercase;

   }
   .vote:hover
   {
     background-color: rgba(25, 62, 140);
     color: red;
   }
   .nav-item
   {
     font-size: 20px;

   }
   .navbar
   {
     background-color:#000033;
   }

   .navbar-toggler-icon
   {
     background-color:#f2f2f2;
   }
   div.middle
   {
     text-align: center;
     border-style: ridge;
     border-color: #e6ffe6;
     border-width: thin;
   }
   .container-custom
   {
     background-color:#000033;
   }
   .navbar-light .brand
   {

     font-size: 40px;
     color: #FFFFFF;
     font-family: Arial, Helvetica, sans-serif;
   }
	 table, th, td {
       border: 1px solid black;
       text-align: center;
        background-color: rgb(0,0,0,0.1);
        margin-left: 40px;
        width: 1300px;
        margin: auto;
        position: relative;
        text-align: center
        border-radius: 15px 15px 0px 0px;
        padding:20px 0px 40px 0px;
        color: black;
				font-style: italic;


                 }
 </style>

 <body>


     <nav class="navbar navbar-expand-lg navbar-light ">

         <a class="brand " href="#" >
           <img src="images/12.png" height="50" class="d-inline-block" alt="Logo"> <b> Dashboard</b>
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto" >

              <li class="nav-item active">
                <a class="nav-link" href="logout.php"> <font color="#cccccc" style="font-family:monospace">Logout</font>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-3" href="Update1.php"><font color="#cccccc" style="font-family:monospace">Update Details</font></a>
              </li>



            </ul>
          </div>


    </nav>


    <div class="container-custom">
        <br>
        <div class="row">

          <img src="images/imag.jpg" height="400px" alt="" style="border-radius: 15px">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <div class="col-md-4">
            <h1 style="color:white; font-family:Perpetua"><b>Election Management : Voter HomePage</b></h1>
              <div class="col-md-8">
              <p style="color:#d9d9d9">
            </p>
          </div>

            <br>
            <br>


          </div>
          <br>
          <div class="row">
              <div class="col-md-12">
                  <a href="vote.php"><button type="button" class="vote" name="">Vote</button></a>
              </div>

          </div>

        </div>


    </div>
    <br>
    <br>
    <br>


    <br>
    <br>
    <br>

				<table>
					<th>FullName</th>
					<th>Father's Name</th>
					<th>Mother's Name</th>
					<th>Address</th>
					<th>NID Number</th>
					<th>Date Of Birth</th>
					<th>Gender</th>



		<?php

				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname="REG";

				$dbs = mysqli_connect($servername, $username, $password, $dbname);
				if (!$dbs) {
						die("Connection failed: " . mysqli_connect_error());
				}

				$Nid=$_SESSION['nid'];
				$Ps=$_SESSION['pass'];




				$sql= "SELECT * FROM person where NID='$Nid' AND Pass='$Ps'";
		    $result=mysqli_query($dbs,$sql);

		    if(mysqli_num_rows($result)>0)
		      {

		        while($row=mysqli_fetch_assoc($result)){
		          echo "<tr><td>".$row["FullName"]."</td><td>".$row["Father"]."</td><td>".$row["Mother"]."</td><td>".$row["Address"]."</td><td>".$row["NID"]."</td><td>".$row["DOB"]."</td><td>".$row["Gender"];
		            }
		            echo "</table>";
					}
					else {
						echo"Error".mysqli_error($dbs);
					}
				mysqli_close($dbs);
				?>
		</table>

			<div class="container">
					<div class="row">
							<div class="col-md-2">
					<br>

								<a href="Update1.php"><button type="button" class="btn" name="">Update Details</button></a>
							</div>
					</div>
			</div>



    <script src="jquery-3.5.1.slim.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <?php
    //session_unset();
    //session_destroy(); ?>



 </body>
 </html>
