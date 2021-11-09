<?php
session_start();
include('config.php');


$companyName =$_SESSION['companyName'];
$companyDesc=$_SESSION['companyDesc'];
$companyAddrs=$_SESSION['companyAddrs'];
$companyTp=$_SESSION['companyTp'];
$DistrictId=$_SESSION['DistrictId'];
$catId=$_SESSION['catId'];
$companyFax=$_SESSION['companyFax'];
$companyWebUrl=$_SESSION['companyWebUrl'];

$sql="INSERT INTO pages 			     (CMPNY_NAME,CMPNY_DES,CMPNY_ADDR,CMPNY_TP,CMPNY_DIST_ID,CMPNY_CITY_ID,CMPNY_CAT_ID,CMPNY_FAX,U_ID,ADD_PAID,ADD_STSTUS,ADD_CREATED,CMPNY_CORDINATES,CMPNY_WEB_URL) VALUES('".$companyName."','".$companyDesc."','".$companyAddrs."','".$companyTp."','".$DistrictId."','".."','".$catId."','".$companyFax."','".."','NO','PREVIEW','".date('d-m-Y')."','-','".$companyWebUrl."')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  echo '<div id="cretMsgContainer">
		<div class="cretMsg">Ooooops, Sorry</div>
		<div>Page is broken</div>
	  </div>
	 ';
  }
else
{
echo '<div id="cretMsgContainer">
		<div class="cretMsg">Details Saved Successfuly</div>
		<div>This will take about 3 - 5 hours to get published.</br>Thank You</div>
	  </div>
	 ';
}
?>