<html>
<head>
<title>Making Money $$$</title>
<link rel="stylesheet" type="text/css" href="css/admin.css"/>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>

<script>
$(document).ready(function() 
{
	$('li#stat').click(function(e) 
	   { 
		$( "#right" ).load( "classes/statistics.php" );
	   });

   $('li#act').click(function(e) 
	   { 
		$( "#right" ).load( "classes/activation.php" );
	   });
   
   $('li#cities').click(function(e) 
	   { 
		$( "#right" ).load( "classes/cities.php" );
	   });
});
</script>



</head>

<body>

  <div id="menuBar">
  		<ul>
	 		<li></li>
	 	</ul>
		<div id="doller">
		  <img src="imgs/Rotating_gold_dollar_sign.gif" width="60px"/>
		</div>
  </div>
  
  <div id="adminBody">
     <div id="left"> 
	    <ul>
			<li id="stat">Statistics</li>
			<li id="act">Activation</li>
			<li id="cities">Cities</li>
		</ul>
	 </div>
	 <div id="right">
	 </div>
  </div>
  
</body>


</html>