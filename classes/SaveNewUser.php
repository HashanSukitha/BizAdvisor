<?php
session_start();
include('config.php');


$SU_Uname=$_POST['SU_uname'];
$SU_Uemail=$_POST['SU_uemail'];
$SU_UPword=$_POST['SU_uPword'];

$sql="INSERT INTO users (U_NAME,U_EMAIL,PWD) VALUES('".$SU_Uname."','".$SU_Uemail."','".$SU_UPword."')";

if (!mysqli_query($con,$sql))
  {
    die('Error: ' . mysqli_error($con));
  }
else
{
	$_SESSION['Uname']=$SU_Uname;
	$_SESSION['Uemail']=$SU_Uemail;
	$_SESSION['UPword']=$SU_UPword;
	
	echo '1';
}
?>