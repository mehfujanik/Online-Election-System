<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['pass']))
{
    echo "string";
}

else {
  echo"<script>alert('Please Log In first!')</script> ";
  header("Location: adminlog.html");

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


    $sql= "DELETE FROM candidate where FullName='$fullname' AND NID='$nid'";
    $result=mysqli_query($dbs,$sql);

    if ($dbs->query($sql) === TRUE) {
  echo"<script>alert('Record deleted successfully!')</script> ";
} else {
  echo"<script>alert('Error deleting record!')</script> ".$dbs->error;
}

  mysqli_close($dbs);




    ?>
