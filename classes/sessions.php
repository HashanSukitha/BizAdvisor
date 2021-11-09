<?php
session_start();


// 0 $_SESSION['Uname'];
// 1 $_SESSION['Uemail'];
// 2 $_SESSION['UPword'];
	
// 3 $_SESSION['companyName'];
// 4 $_SESSION['companyDesc'];
// 5 $_SESSION['companyAddrs'];
// 6 $_SESSION['companyTp'];
// 7 $_SESSION['DistrictId'];
// 8 $_SESSION['catId'];
// 9 $_SESSION['companyFax'];
//10 $_SESSION['companyWebUrl'];

	
	echo $_SESSION['Uname'].','.$_SESSION['Uemail'].','.$_SESSION['UPword'].','.$_SESSION['companyName'].','.$_SESSION['companyDesc'].','.$_SESSION['companyAddrs'].','.$_SESSION['companyTp'].','.$_SESSION['DistrictId'].','.$_SESSION['catId'].','.$_SESSION['companyFax'].','.$_SESSION['companyWebUrl'];

?>