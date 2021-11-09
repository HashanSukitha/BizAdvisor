<html>
<head>
	<title>Advisor</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css"/>
	
	
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/loadCities.js"></script>
	<script type="text/javascript" src="js/submitCreatePage.js"></script>
	<script type="text/javascript" src="js/getComAdds.js"></script>
	
	<link rel='shortcut icon' type='image/x-icon' href='imgs/biz.ico' />

	<script type="text/javascript">
	$(document).ready(function() 
 	{
  
		//j(window).load(function(){
			//$('.preloader').fadeOut('slow',function(){$(this).remove();});
			//j('.preloader').fadeOut('slow',function(){ j(".preloader").css("display", "none");      });
		//});
		$('h3#Name').click(function(e) 
		   { 
			window.location.href='index.php'
		   });
		   
		 $('a#loginA').click(function(e) 
		   { 
			$( "#container" ).load( "login.php" );
		   });
		   
		 $('a#logoutA').click(function(e) 
		   { 
			$( "#container" ).load( "login.php" );
		   });
		 
		 $('a#createPgBtn').click(function(e) 
		   { 
			$( "#container" ).load( "create_page.php" );
		   });
		 
		 $('a#contactUs').click(function(e) 
		   { 
			$( "#container" ).load( "contactUs.php" );
		   });
		   
	   
	 });  
	
	function loads()
	{
	  Guider("#009F3C","SelectDistrict");
	  IsUserLogedIn();
	}

	var clr;
	function Guider(color,id)
	{
		
			 $("#"+id).animate({borderColor: color}, 500 ,
			 function(){
							if(clr=="#ffffff")
							{
							    clr="#009F3C";
								Guider("#009F3C",id);
							}
							else
							{
								clr="#ffffff";
								Guider("#ffffff",id);
							}
						});
	}

	function closeWindow(windowId) 
	{
            $("#" + windowId).animate({ height: '0px' }, "slow", function () {
                $("#" + windowId).hide();
            });
    }
	
	var SlctdCity;
	var SlctdCityCode;
	function selectedCity(cityId,city)
	{
		SlctdCity=city;
		SlctdCityCode=cityId;
	
		$("#SelectDistrict").prop("disabled", true);
		$("#searchBox").append('<div id="SlctdCityBox">'+city+'<p id="SlctdCityBoxClose" onClick="RemoveSlctdCity()">X</p></div>');
		

		$( "#SelectDistrict" ).stop();
		$("#SelectDistrict").css("borderColor","#fff");

		$("#SelectedCategry").prop("disabled", false);
		Guider("#009F3C","SelectedCategry");


		closeWindow('cityBox');
	}
	
	function selectedCityCrtPG(cityId,city)
	{
		SlctdCity=city;
		SlctdCityCode=cityId;
	
		$("#slctdcity").append('<div id="SlctdCityBox">'+city+'<p id="SlctdCityBoxClose" onClick="RemoveSlctdCity()">X</p></div>');

		closeWindow('cityBox');
	}

	function RemoveSlctdCity()
	{
		$("#SlctdCityBox").remove();
		$("#SelectDistrict").prop("disabled", false);
		$("#SelectedCategry").prop("disabled", true);

		$( "#SelectedCategry" ).stop();
		$("#SelectedCategry").css("borderColor","#fff");

		$("#searchCircle").stop();
		$("#searchCircle").css({border: 'none'});

		clr="#fffff0f";

		$("#SelectedCategry").val(0);
		$("#SelectDistrict").val(0);
		
		Guider("#009F3C","SelectDistrict");
	}

	function SelectedCatgry()
	{
		var CattID = document.getElementById("SelectedCategry").value;
		if(CattID!="0")
		{
			$( "#SelectedCategry" ).stop();
			$("#SelectedCategry").css("borderColor","#fff");
			$("#searchCircle").css({border: '1px solid #fff'});
			Guider("#009F3C","searchCircle");
		}
	}
	
	function cityWindowClosed()
	{
		$("#SelectDistrict").val(0);
	}

	var companyName;
	var companyDesc;
	var companyAddrs;
	var companyTp;
	var DistrictId;
	var catId;
	var companyFax;
	var companyWebUrl;
	
	function PageConfirmation()
	{
		companyName=$('#cretCmpName').val();
		companyDesc=$('#CmpnyDesc').text();
		companyAddrs=$('#CmpnyAddrs').text();
		companyTp=$('#CmpnyTp').val();
		DistrictId=$('#SlctDistrict').val();
		catId=$('#SlctCatgry').val();
		companyFax=$('#CmpnyFax').val();
		companyWebUrl=$('#CmpnyWebUrl').val();

		window.location.href = 'create_page_comfirm.php?companyName='+companyName+'&companyDesc='+companyDesc+'&companyAddrs='+companyAddrs+'&companyTp='+companyTp+'&DistrictId='+DistrictId+'&catId='+catId+'&companyFax='+companyFax+'&companyWebUrl='+companyWebUrl;
	}
	
	function SavePage()
	{		  

	  $.ajax(
			{
				type: 'post',
				url: 'classes/ajaxsubmit.php',
				//data: { companyname: companyName
						
				//	   },
				success: function(result)
				{
				alert(companyName);
						$("#Container").html(result);	 
				},
				error: function(data) 
						{
							alert(result);
						}
			});
	}
	
	function loginSignUpTabChanger(formId,formIdHide,tabId,BotmShowTabId)
	{
		$('#'+formId).css('display','block');
		$('#'+formIdHide).css('display','none');
		
		$('#'+tabId).css('border-bottom','none');
		$('#'+BotmShowTabId).css('border-bottom','1px solid #9B9B9B');
		
	}
	
	function SaveNewUser()
	{
		 var SU_Uname=$("#SU_Uname").val();
		 var SU_Uemail=$("#SU_Uemail").val();
		 var SU_UPword=$("#SU_UPword").val();
		 var SU_ConfmUPword=$("#SU_ConfmUPword").val();
		 
		 if(SU_Uname!="")
		 {
		 	 if(SU_Uemail!="")
			 {			 		 
				 if(validateEmail()!=false)
				 {
					 if(SU_UPword!="")
					 {
					 	 if(SU_ConfmUPword!="")
						 {
						 	 if(SU_ConfmUPword==SU_UPword)
							 {
							 	$.ajax(
										{
											type: 'post',
											url: 'classes/SaveNewUser.php',
											data: { 
													SU_uname: SU_Uname,
													SU_uemail:SU_Uemail,
													SU_uPword:SU_UPword
												   },
											success: function(result)
											{
												if(result=='1')
												{
													window.location.href = 'MyPages.php';
												}
												else
												{
													alert(result);
													alert("User Did not Save 'System Error'")
												}
											},
											error: function(data) 
													{
														alert(result);
													}
										});
							 }
							 else
							 {
								alert("'Confirm Password' does not match with 'Password'");
							 } 
						 }
						 else
						 {
							alert("Please Enter 'Confirm Password'");
						 } 
					 }
					 else
					 {
						alert("Please Enter 'Password'");
					 } 
				 }
				 else
				 {
					alert("Not a valid e-mail address");
				 }	 
			 }
			 else
			 {
				alert("Please Enter 'E-Mail'");
			 }
		 }
		 else
		 {
		 	alert("Please Enter 'Name'");
		 }
	}
	
	function validateEmail()
	{
		var email=$("#SU_Uemail").val();
		//var x = document.forms["myForm"]["email"].value;
		var atpos = email.indexOf("@");
		var dotpos = email.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) 
		{	
			return false;
   		}
		else
		{
		    return true;
		}
	}
	
	function IsUserLogedIn()
	{

		$.ajax(
			{
			 type: 'post',
			 url: 'classes/sessions.php',
			 data: { 
					
					},
			success: function(result)
					{
					 var AppData=result.split(",");
							alert(AppData[0]);
						 if(AppData[0]!='')
						 {
							 $("#loginA").css('display','none');
							 $("#logoutA").css('display','block');		
						 }
						 else
						 {
						 	$("#loginA").css('display','block');
							 $("#logoutA").css('display','none');	
						 }			
					},
			error: function(data) 
			{
				alert(data);
			}
		});
	}
	
	function LogOut()
	{
		$.ajax(
			{
			 type: 'post',
			 url: 'classes/LogOut.php',
			 data: { 
					
					},
			success: function(result)
					{
					 window.location.href = 'index.php';		
					},
			error: function(data) 
			{
				alert(data);
			}
		});
	}

	</script>

	
</head> 
	
<body onLoad="loads()">
	
	   <div id="topBar">
	   		<div id="TopBarCenter">
				<h3 id="Name"  style="cursor:pointer"><i style="color:#FF0000; cursor:pointer">Biz</i>Advisor</h3>

				<a id="contactUs">Contact Us</a>
				<a id="createPgBtn">Create your Page</a>
				<a id="loginA" style="display:none;">Log in</a>
				<a id="logoutA" onClick="LogOut();" style="display:none;">Log out</a>
				
			</div>
	   </div>

	   