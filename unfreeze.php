<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="reg";
    $temp=0;

    $dbs = mysqli_connect($servername, $username, $password, $dbname);
    if (!$dbs) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql= "SELECT * FROM freeze";
    $result=mysqli_query($dbs,$sql);

  while($row=mysqli_fetch_assoc($result))
        $temp=$row["value"];

if ($temp==0) {
    $sql="UPDATE freeze SET  value = 1";
    $result=mysqli_query($dbs,$sql);
    echo"<script>alert('System is now normal')</script> ";


}
else {
  echo"<script>alert('System is already normal')</script> ";
}
    mysqli_close($dbs);
    ?>
