<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="reg";

$dbs = mysqli_connect($servername, $username, $password, $dbname);
if (!$dbs) {
    die("Connection failed: " . mysqli_connect_error());
}


$fullname=$_POST['fullname'];
$father=$_POST['father'];
$mother=$_POST['mother'];
$Address=$_POST['address'];
$Nid=$_POST['nid'];
$date=$_POST['Date'];
$Gender=$_POST['gen'];
//$Ballot=$_POST['ballot'];
$year=date('Y', strtotime($date));
$temp=0;
if ($year>2002) {
  echo"<script>alert('Inappropiate Age!')</script> ";
  mysqli_close($dbs);
}
$sql="SELECT MAX(Ballot) FROM candidate";
$rslt=mysqli_query($dbs,$sql);



if(mysqli_num_rows($rslt)>0)
  {

    while($row=mysqli_fetch_assoc($rslt)){
      $temp=$row['MAX(Ballot)'];
        }
  }
  else {
    $temp=1;
  }
  $Ballot= $temp+1;

  $sql="SELECT * FROM person WHERE NID='$Nid'";

  $rslt=mysqli_query($dbs,$sql);



  if(mysqli_num_rows($rslt)>0)
    {
      echo"<script>alert('NID Already Regsitered!')</script> ";
      mysqli_close($dbs);

    }
    else {

if ($fullname==NULL  or $father==NULl or $Address==NULl or $mother==NULL or $Nid==NULl or $date==NULl or $Gender==NULl) {
  echo "U need to fill up all field";
  mysqli_close($dbs);
} else {


  }



  if (strlen($fullname) <= '5' or strlen($fullname) >= '25') {
      echo "Your Fullname Must Contain At Least 8 Characters!";
      mysqli_close($dbs);
  }
  elseif (strlen($Nid) != '10') {
      echo "NID Number should be 10 Digits!";
      mysqli_close($dbs);
  }
  if (strlen($father) <= '5' or strlen($father) >= '25') {
      echo "Your Father's name Must Contain At Least 8 Characters!";
      mysqli_close($dbs);
  }

  if (strlen($Nid) <= '5' or strlen($Nid) >= '25') {
      echo "Your NID Number Must Contain At Least 8 Characters!";
      mysqli_close($dbs);
  }



  $sql= "INSERT INTO candidate (FullName,Father,Mother,Address,NID,DOB,Gender,Ballot) VALUES('$fullname','$father','$mother','$Address','$Nid','$date','$Gender','$Ballot')";

  if(!mysqli_query($dbs,$sql))
  {
    echo "Not inserted".mysqli_error($dbs);

  }
  else {
    echo"<script>alert('successfully inserted!')</script> ";
  }

}

mysqli_close($dbs);


 ?>
