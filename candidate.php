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

<html >
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
  table, th, td {
      border: 1px solid white;
      text-align: center;
       background-color: rgb(0,0,0,0.3);
       margin-left: 40px;
       width: 1700px;
       margin: auto;
       position: relative;
       text-align: center
       border-radius: 15px 15px 0px 0px;
       padding:40px 0px 40px 0px;
       border-radius: 15px;
       color: white;


                }
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
                background: black;
                display: block;
                margin: 20px auto;
                text-align: center;
                border :2px solid white;
                padding: 14px 40px;
                width: 200px;
                outline: none;
                color: white;
                border-radius: 24px;

                                  }
  </style>
  <body>
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
    $Ps="a";
    $Bs="b";

    $dbs = mysqli_connect($servername, $username, $password, $dbname);
    if (!$dbs) {
        die("Connection failed: " . mysqli_connect_error());
    }




    $sql= "SELECT * FROM candidate ";
    $result=mysqli_query($dbs,$sql);

    if(mysqli_num_rows($result)>0)
      {

        while($row=mysqli_fetch_assoc($result)){
          echo "<tr><td>".$row["FullName"]."</td><td>".$row["Father"]."</td><td>".$row["Mother"]."</td><td>".$row["Address"]."</td><td>".$row["NID"]."</td><td>".$row["DOB"]."</td><td>".$row["Gender"]."</td><tr><br>";
            }
            echo "</table>";

      }
      else {
        echo"Error".mysqli_error($dbs);
      }




    ?>


</table>
  </body>
</html>
