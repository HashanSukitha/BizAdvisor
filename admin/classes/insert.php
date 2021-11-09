<?php
include('../config.php');


$name = $_POST["name"];
$addr = $_POST["addr"];
$tp = $_POST["tp"];
$dob = $_POST["dob"];


//=========================================================================


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO user (name,address,tp,DOB) VALUES ('$name','$addr','$tp','$dob')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
//header("Location: php_functions/select.php");

echo "Redord Added to the system";
 
mysqli_close($con);






?> 