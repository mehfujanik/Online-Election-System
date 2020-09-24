<?php
session_start();
 if(isset($_SESSION['nid']) && isset($_SESSION['pass']))
 {
$servername = "localhost";
$username = "root";
$password = "";
$dbname="reg";

$dbs = mysqli_connect($servername, $username, $password, $dbname);
if (!$dbs) {
    die("Connection failed: " . mysqli_connect_error());
}

$Nid=$_SESSION['nid'];

$father=$_POST['father'];
$mother=$_POST['mother'];
$Address=$_POST['address'];

$date=$_POST['Date'];

$Ps=$_POST['pass'];
$year=date('Y', strtotime($date));


if ($Ps==NULL or $father==NULl or $Address==NULl or $mother==NULL or $date==NULl ) {
  echo "U need to fill up all field";
} else {

  if ($year>2002) {
    echo"<script>alert('Inappropiate Age!')</script> ";
    mysqli_close($dbs);
  }
      if (strlen($Ps) < '8') {
          echo "Your Password Must Contain At Least 8 Characters!";
            mysqli_close($dbs);
              }
      elseif(!preg_match("#[0-9]+#",$Ps)) {
        echo  "Your Password Must Contain At Least 1 Number!";
        mysqli_close($dbs);
        }
        elseif(!preg_match("#[A-Z]+#",$Ps)) {
          echo  "Your Password Must Contain At Least 1 Capital Letter!";
          mysqli_close($dbs);
            }
      elseif(!preg_match("#[a-z]+#",$Ps)) {
      echo  "Your Password Must Contain At Least 1 Lowercase Letter!";
      mysqli_close($dbs);
          }


        if (strlen($father) <= '8' ) {
          echo "Your Father's name Must Contain At Least 8 Characters!";
          mysqli_close($dbs);
            }


  $sql= "UPDATE person set Father='$father', Mother='$mother', Address='$Address', DOB='$date',Pass='$Ps' WHERE NID='$Nid'";
  if(!mysqli_query($dbs,$sql))
  {
    echo "Not inserted".mysqli_error($dbs);

  }
  else {
    echo"<script>alert('successfully Updated!')</script> ";
  //  header("Location: signpage.html");
      }

  }
}

 {
//
  echo"<script>alert('Please Log In first!');
   window.location = 'signpage.html';</script> ";
 //header("Location: signpage.html");

}

mysqli_close($dbs);





 ?>
