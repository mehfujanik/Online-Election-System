<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="reg";

$dbs = mysqli_connect($servername, $username, $password, $dbname);
if (!$dbs) {
    die("Connection failed: " . mysqli_connect_error());
}


$Uname=$_POST['uname'];
$Ps=$_POST['pass'];


if ($Uname==NULL or $Ps==NULL ) {
  echo "U need to fill up all field";
}


  $sql= "SELECT * FROM admin";
  $result=mysqli_query($dbs,$sql);
  if(mysqli_num_rows($result)==1){

    echo"<script>alert('One Admin Available. Cannot delete!')</script> ";
    mysqli_close($dbs);


    }

    else {
      $sql= "DELETE FROM admin WHERE UserName='$Uname' and Pass='$Ps' ";

      if(!mysqli_query($dbs,$sql))
      {
        echo "Operation failed".mysqli_error($dbs);

      }
      else {
        echo"successfully Deleted";
      }



    mysqli_close($dbs);
    }








 ?>
