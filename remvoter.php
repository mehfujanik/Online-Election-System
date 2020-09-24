<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['pass']))
{
    echo "string";
}

else {
  echo"<script>alert('Please Log In first!');
   window.location = 'adminlog.html';</script> ";

}
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="reg";

    $dbs = mysqli_connect($servername, $username, $password, $dbname);
    if (!$dbs) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $fullname=$_POST['uname'];
    $nid=$_POST['nid'];
    $sql="SELECT * FROM person WHERE NID='$nid' AND FullName= '$fullname'";

    $rslt=mysqli_query($dbs,$sql);



    if(mysqli_num_rows($rslt)>0)
      {



    $sql= "DELETE FROM person where FullName='$fullname' AND NID='$nid'";
    $result=mysqli_query($dbs,$sql);

    if ($dbs->query($sql) === TRUE) {
  echo"<script>alert('Record deleted successfully!')</script> ";
} else {
  echo"<script>alert('Error deleting record!')</script> ".$dbs->error;
}
}

else { echo"<script>alert('No user found!')</script> ";
}

  mysqli_close($dbs);




    ?>
