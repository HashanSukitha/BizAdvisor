<?php
session_start();

	if(isset($_SESSION['Uname'])) 
	{
	  	unset($_SESSION['Uname']);
		unset($_SESSION['Uemail']);
		unset($_SESSION['UPword']);
			
		unset($_SESSION['companyName']);
		unset($_SESSION['companyDesc']);
		unset($_SESSION['companyAddrs']);
		unset($_SESSION['companyTp']);
		unset($_SESSION['DistrictId']);
		unset($_SESSION['catId']);
		unset($_SESSION['companyFax']);
		unset($_SESSION['companyWebUrl']);
  	}
	
?>