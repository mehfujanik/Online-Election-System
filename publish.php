<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['pass']))
{

}

else {
  echo"<script>alert('Please Log In first!');
   window.location = 'adminlog.html';</script> ";

}

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
      height: 295px;
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
                  body {
                        background-image: url("images/img.jpg");
                        background-position:center;
                        background-size: cover;
                        height: 900px;
                        font-family: sans-serif;
                        margin-top: 40px;
                        margin-left: 40px;
                        }
  </style>

  <body>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="row">
        <div class="col-md-12">
            <form class="" action="publishresult.php" method="post">
              <input class="vote" type="submit" name="" value="Publish">
            </form>
        </div>

    </div>
  </body>
</html>
