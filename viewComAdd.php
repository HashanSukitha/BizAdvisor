<?php
include("head.php"); 
include('classes/config.php');


$catgs = mysql_query("SELECT * FROM adds where ADD_ID=".$_GET["id"], $link);
?>

	<div class="PlaceHolder1">
	</div> 
	
	<div id="Container">
		<?php
		while($row = mysql_fetch_array($catgs))
		{
			echo '<a href="#"><div class="AddContainer">
					'.$row['ADD_NAME'].'
				  </div></a>';
		}
		?>
	</div>	 
	  
<?php include("footer.php");?>