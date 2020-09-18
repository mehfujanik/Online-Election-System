<?php
session_start();
 if(isset($_SESSION['nid']) && isset($_SESSION['pass']))
 {

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
                    background: rgb(38, 105, 212,0.4);
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

                                      button:hover
                            										   {
                            											   background-color: rgba(25, 62, 140);
                            											   color: red;
                            													 }
      </style>
      <body>
        <table>
          <th>Ballot Number</th>
          <th>Full Name</th>
          <th>Vote</th>
      <?php
      echo "<form name=\"form2\" action=\"votesubmit.php\" method=\"post\">";
  while($row=mysqli_fetch_assoc($result)){
      echo "<tr><td>Ballot: {$row['Ballot']}</td><td>  {$row['FullName']}</td><td>";
      echo "<button name=\"btn\" value=\"{$row['Ballot']}\">Vote</button> </td><tr><br>";
  }
echo "</form>";
?>

<a href="voterhome.php"><button type="button" name="button">Go to Home</button></a>
      </body>
    </html>
