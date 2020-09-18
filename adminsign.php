<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="reg";

    $dbs = mysqli_connect($servername, $username, $password, $dbname);
    if (!$dbs) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $username=$_POST['uname'];
    $Ps=$_POST['pass'];


    $sql= "SELECT * FROM admin where Username='$username' AND Pass='$Ps'";
    $result=mysqli_query($dbs,$sql);

    if(mysqli_num_rows($result)>0)
      {
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['pass']=$Ps;
        include ("adminhome.php");
      }
      else {
        echo"<script>alert('Username and password did not match!')</script> ";
        
      }
    mysqli_close($dbs);



    ?>
