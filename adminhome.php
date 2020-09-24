<?php

	if(isset($_SESSION['username']) && isset($_SESSION['pass']))
  {

  }

	else {
		echo"<script>alert('Please Log In first!');
	   window.location = 'adminlog.html';</script> ";
    

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
     text-align: right;
     padding: 7px;
     border: none;
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
 </style>

 <body>


     <nav class="navbar navbar-expand-lg navbar-light ">

         <a class="brand " href="#" >
           <img src="images/12.png" height="50" class="d-inline-block" alt="Logo"> <b> Admin</b>
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto" >

              <li class="nav-item active">
                <a class="nav-link" href="voter.php"> <font color="#cccccc" style="font-family:monospace">Manage Voters</font>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-3" href="candidatehome.php"><font color="#cccccc" style="font-family:monospace">Manage Candidates</font></a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-3" href="publish.php"><font color="#cccccc" style="font-family:monospace" >Result Management</font></a>
              </li>


            </ul>
          </div>
          <div class="nav-item mx-3">
						<a href="logout.php"><button class="btn " style="color:white">Log Out</button></a>

          </div>
      </div>
    </nav>


    <div class="container-custom">
        <br>
        <div class="row">

          <img src="images/imag.jpg" height="400px" alt="" style="border-radius: 15px">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <div class="col-md-4">
            <h1 style="color:white; font-family:Perpetua"><b>Election Management Admin Page</b></h1>
              <div class="col-md-8">
              <p style="color:#d9d9d9">
            </p>
          </div>
            <br>
            <br>


          </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container">
      <div class="row">


      <div class="col-md-6">


        <a href="freeze.php"><button style="padding:14px 80px;color: white ; background-color: #850707; border-radius: 15px; "  type="button" name="button">Freeze System</button></a>
      </div>
      <div class="col-md-6">


        <a href="unfreeze.php"><button style="padding:14px 80px;color: white ; background-color: #048004; border-radius: 15px; "  type="button" name="button">UnFreeze System</button></a>
      </div>
      </div>
    </div>

    <br>
    <br>
    <br>
  <div class="container">
    <h2 style="color:#000066">Manage Admins</h2>
    <br><br>

  </div>

    <div class="container">
     <div class="row">
      <div class="col-md-6">


       <form class="" action="addadmin.php" method="post">

          <h5 style="color:#000066">Add Admins</h5>
          <p>Username :</p>
          <input type="text" name="uname" value="">
          <p>Password :</p>
          <input type="text" name="pass" value="">

          <div class="">
            <br>
            <button class="btn" type="submit" style="color:white">Submit</button>
          </div>
       </form>
      </div>

      <div class="col-md-6">

       <form class="" action="removeadmin.php" method="post">

          <h5 style="color:#000066">Remove Admins</h5>
          <p>Username :</p>
          <input type="text" name="uname" value="">
          <p>Password :</p>
          <input type="text" name="pass" value="">

          <div class="">
            <br>
            <button class="btn" type="submit" style="color:white">Submit</button>
          </div>
      </form>
      </div>


     </div>
    </div>

    <script src="jquery-3.5.1.slim.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <?php
  //  session_unset();
    //session_destroy(); ?>

   }

 </body>
 </html>
