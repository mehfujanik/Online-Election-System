<!DOCTYPE html>
<?php
 session_start();
	if(isset($_SESSION['nid']) && isset($_SESSION['pass']))
  {
  }

  else {
    echo"<script>alert('Please Log In first!')</script> ";
   header("Location: signpage.html");

  }

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <style>
    body {
          background-image: url("97.jpg");
          background-position:center;
          background-size: cover;
          height: 900px;
          font-family: sans-serif;
          margin-top: 40px;
          margin-left: 40px;
          }

    button{
      border: 0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border :2px solid #2ecc71;
      padding: 14px 40px;
      width: 200px;
      outline: none;
      color: white;
      border-radius: 24px;



    }
    .snd{
      align-items: right;
      background-color: red;
      float: center;
      margin-left: 820px;
     }
     .test{
       text-align: center;
     }
     .box{
                  text-align: center;
                   background-color: rgb(0,0,0,0.7);
                   margin-left: 40px;
                   width: 800px;
                   margin: auto;
                   position: relative;
                   text-align: center
                   border-radius: 15px 15px 0px 0px;
                   padding:10px 0px 10px 0px;
                   border-radius: 15px;
                 }
                 .box input[type="text"], .box input[type="password"],.box input[type="date"], .box b{
                 border: 0;
                 background: none;
                 display: block;
                 margin: 20px auto;
                 text-align: center;
                 border :2px solid #3499db;
                 padding: 14px 10px;
                 width: 200px;
                 outline: none;
                 color: white;
                 border-radius: 24px;
                 transition: 0.25s;
                 }
                 .box input[type="text"]:hover, .box input[type="password"]:hover,.box input[type="date"]:hover{
                   width: 280px;
                   border-color: #db1200
                 }



  </style>
  <body>

    <form class="box" action="update.php" method="POST">
      <div class="test">


      <h1 style="color:white">Update Info<hr></h1>
      <br>

      <b>Name cannot be changed</b>

      <input type="text" name="father" placeholder="Father's name" value="">

      <input type="text" name="mother" placeholder="Mother's Name " value="">

      <input type="text" name="address" placeholder="Address" value="">

      <input type="date" name="Date" placeholder="Date of birth" value="">


      <b>NID Number cannot be changed</b>

      <input type="password" name="pass" placeholder="Password" value="">

      <br><br>
      <button  type="submit" name="Sign">Update</button>
      </div>


  </body>
</html>
