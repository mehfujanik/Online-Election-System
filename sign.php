
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="reg";

    $dbs = mysqli_connect($servername, $username, $password, $dbname);
    if (!$dbs) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $Nid=$_POST['nid'];
    $Ps=$_POST['pass'];


    $sql= "SELECT * FROM person where NID='$Nid' AND Pass='$Ps'";
    $result=mysqli_query($dbs,$sql);

    if(mysqli_num_rows($result)>0)
      {
        session_start();
        $_SESSION['nid']=$Nid;
        $_SESSION['pass']=$Ps;
        
      header("Location: voterhome.php");
      }
      else {
        echo"<script>alert('Username and password did not match!')</script> ";

      }
    mysqli_close($dbs);
    ?>
