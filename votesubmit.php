<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="reg";
    $temp=0;

    $Vote=$_POST['btn'];
    session_start();
    $Nid=$_SESSION['nid'];
    $Ps=$_SESSION['pass'];

  //  echo "string".$Nid;
    $dbs = mysqli_connect($servername, $username, $password, $dbname);
    if (!$dbs) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql= "SELECT vote FROM person WHERE NID='$Nid'";
    $result=mysqli_query($dbs,$sql);

  while($row=mysqli_fetch_assoc($result))
        $temp=$row["vote"];

if ($temp==1) {

    echo"<script>alert('Your Vote Submitted Already')</script> ";


}
else {
  echo"<script>alert('Vote Given ')</script> ";
  $sql="UPDATE candidate SET  VoteCount = VoteCount + 1
  WHERE Ballot='$Vote'";
  $result=mysqli_query($dbs,$sql);
  $sql="UPDATE person SET  vote = 1";
  $result=mysqli_query($dbs,$sql);
}
    mysqli_close($dbs);
    ?>
