<?php

$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$con = mysqli_connect($servername, $username, $password);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "CREATE DATABASE REG";
if (mysqli_query($con, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($con);
}
$dbname="REG";

$dbs = mysqli_connect($servername, $username, $password, $dbname);
if (!$dbs) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE person
(
  FullName varchar(15),
  Father varchar(15),
  Mother varchar(15),
  Address varchar(50),
  NID varchar(50),
  DOB date,
  Gender varchar(15),
  Pass varchar(15)
)";

if (mysqli_query($dbs, $sql)) {
    echo "Table person created successfully";
} else {
    echo "Error creating table: " . mysqli_error($dbs);
}
mysqli_close($dbs);
mysqli_close($con);
   ?>
