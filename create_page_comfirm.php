<?php 
session_start();
include("head.php");
include('classes/config.php');
$dicts = mysql_query("SELECT * FROM districts", $link);
$catgs = mysql_query("SELECT * FROM biz_categories", $link);

$_SESSION['companyName']=$_GET['companyName'];
$_SESSION['companyDesc']=$_GET['companyDesc'];
$_SESSION['companyAddrs']=$_GET['companyAddrs'];
$_SESSION['companyTp']=$_GET['companyTp'];
$_SESSION['DistrictId']=$_GET['DistrictId'];
$_SESSION['catId']=$_GET['catId'];
$_SESSION['companyFax']=$_GET['companyFax'];
$_SESSION['companyWebUrl']=$_GET['companyWebUrl'];


?>
<div id="Container" style="width: 1024px; min-height: 550px;">

		<div id="confrmCntner">
			<div id="confrmTopRow">
				<p>Confirm your Page</p>
			</div>
			
			<div id="confrmBtmRow">
			
				<div id="confrmRowCol1">
					<h3>Welcome</h3>
					<p>Please enter your <b><i style="color:#FE7878">Biz</i>Advisor</b> password to confirm<br />
					 your Biz Page and send it to review.</p>
				</div>
				
				<div id="confrmRowCol2">
						<input type="text" placeholder="E-mail" id="userMail" />
						<input type="password" placeholder="Password" id="userPwd" />
						<input type="button" value="Confirm Page" id="PgConfrmBtn" onclick="SavePage()" />
				</div>
				
			</div>
		</div>

</div>
	
<?php include("footer.php");?>