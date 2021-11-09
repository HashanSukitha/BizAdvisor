<?php

include('classes/config.php');

$dicts = mysql_query("SELECT * FROM districts", $link);
$catgs = mysql_query("SELECT * FROM biz_categories", $link);


?>
<div id="cityBox" style="display:none" class="center">
			
			<div class="midContentBox">

					<div class="modal-header">

						<h4 class="modal-title">Select a City</h4>
						<p class="close" onClick="closeWindow('cityBox');cityWindowClosed();" style="float:right;">X</p>

					</div>
					<div id="footStripe"></div>

					<div class="modal-body" id="citiesContaner"></div>

			</div>

	   </div>

<div id="searchBoxContainer">
    <div id="searchBox">
	   		<div id="SearchMidBox">
				
				<select class="SearchSelect" id="SelectDistrict" onchange="showCitiesWindow();">
					<option value="0" selected="selected">Select a District</option>
					<?php
					
					while($row = mysql_fetch_array($dicts))
  					{
					  echo '<option value="'.$row['district_id'].'">'.$row['destrict'].'</option>';
  					}
					?>	
			   </select>
								
				<select id="SelectedCategry" class="SearchSelect" onchange="SelectedCatgry();" disabled>
			   		<option value="0" selected="selected">Select a Categories</option>
					<?php
					
					while($row = mysql_fetch_array($catgs))
  					{
					  echo '<option value="'.$row['CAT_ID'].'">'.$row['CAT_DESC'].'</option>';
 					}
					?>	
			   </select>
			   			   
			   
			</div>
	   
	   		<div id="searchCircle">
			</div>
</div>
</div>