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

$sql="SELECT * FROM admin WHERE Username='$Uname'";

$rslt=mysqli_query($dbs,$sql);



if(mysqli_num_rows($rslt)>0)
  {
    echo"<script>alert('Username Already Regsitered; Use a different UserName!')</script> ";
    mysqli_close($dbs);

  }
  else {


if ($Uname==NULL or $Ps==NULL ) {
  echo "U need to fill up all field";
} else {


  if (strlen($Ps) < '8') {
      echo "Your Password Must Contain At Least 8 Characters!";
      mysqli_close($dbs);
  }


  if (strlen($Uname) <= '5' or strlen($Uname) >= '25') {
      echo "Your Fullname Must Contain At Least 5 Characters And at most 25 characters!";
      mysqli_close($dbs);
  }




  $sql= "INSERT INTO admin (UserName,Pass) VALUES('$Uname','$Ps')";

  if(!mysqli_query($dbs,$sql))
  {
    echo "Not inserted".mysqli_error($dbs);

  }
  else {
    echo"successfully inserted";
  }

}
}

mysqli_close($dbs);





 ?>
