<!DOCTYPE html>
<?php
	session_start();
	if(isset($_SESSION['username']) && isset($_SESSION['pass']))
  {
			echo "string";
  }

	else {
    echo"<script>alert('Please Log In first!')</script> ";
    header("Location: adminlog.html");

	}

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
    body {
          background-image: url("images/12.jpg");
          background-position:center;
          background-size: cover;
          height: 900px;
          font-family: sans-serif;
          margin-top: 40px;
          margin-left: 40px;
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
                      .box input[type="text"], .box input[type="password"],.box input[type="date"]{
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

    button{
      background-color: #2ecc71;
      border-radius: 20px;
      padding:14px 40px;
      outline: none;
      color : white;
      width: 200px;



    }
    button:hover{
      background-color: #7d0604;
    }

    .box h2:hover{
      color: #a8a800;
      text-transform: uppercase;
      font-weight: 600;
    }
    .box h2{
      color: white;
      text-transform: uppercase;
      font-weight: 600;
    }
    .box input[type="text"]:hover, .box input[type="password"]:hover{
      width: 280px;
      border-color: #db1200;
    }


  </style>
<body>

      <form class="box" action="remvoter.php" method="post">
        <h2>Remove voters <hr></h2>
        <br>
        <input type="text" name="uname" placeholder="Fullname"value="">

        <input type="password" name="nid" placeholder="NID No." value="">
        <br><br>
        <button type="submit" name="signIn">Remove</button>
        <br><br><br>

      </form>
</body>
</html>
