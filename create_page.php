<?php 
include("head.php");
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
<? //========================================================================================================================================== ?>
<!--	<div class="PlaceHolder1">
	</div>-->
	<div id="Container" style="width: 1024px; min-height: 550px;"> 
	  <form>
	  
		 <div id="cretCol1" class="creCols">
		 
		     <div class="cretContner">
				 <div class="cretDescrptns">
				    District
				 </div>
				 
				 <div class="cretControls" id="slctdcity">
				 	
				    <select class="SearchSelect" id="SlctDistrict" onchange="showCitiesWindowCrtPG();">
						<option value="0" selected="selected">Select a District</option>
						<?php
						
						while($row = mysql_fetch_array($dicts))
						{
						  echo '<option value="'.$row['district_id'].'">'.$row['destrict'].'</option>';
						}
						
						?>	
			   		</select>
					
				 </div>
			 </div>
			 
			 <div class="cretContner">
				 <div class="cretDescrptns">
				    Category
				 </div>
				 
				 <div class="cretControls">
				   <select class="SearchSelect" id="SlctCatgry">
						<option value="0" selected="selected">Select a Categories</option>
						<?php
						
						while($row = mysql_fetch_array($catgs))
						{
						   echo '<option value="'.$row['CAT_ID'].'">'.$row['CAT_DESC'].'</option>';
						}
						?>	
			  		 </select>
				 </div>
			 </div>
			   
			 <div class="cretContner">
				 <div class="cretDescrptns">
				    Company Name
				 </div>
				 
				 <div class="cretControls">
				    <input type="text" name="cretCmpName" id="cretCmpName" value=""/>
				 </div>
			 </div>
			 
			 <div class="cretContner">
				 <div class="cretDescrptns">
				    Description
				 </div>
				 
				 <div class="cretControls" id="cretDesc">
				   <textarea id="CmpnyDesc" rows="2" cols="34" name="cretDesc" style="height:50px" ></textarea>
				 </div>
			 </div>
			 
			 <div class="cretContner">
				 <div class="cretDescrptns">
				   Address
				 </div>
				 
				 <div class="cretControls" id="cretAddr">
				   <textarea id="CmpnyAddrs" rows="2" cols="34" name="cretAddr" style="height:50px" ></textarea>
				 </div>
			 </div>
			 	 
		 </div>
		 
		 <div id="cretCol2" class="creCols">
		 
		     <div class="cretContner">
				 <div class="cretDescrptns">
				    Telephone
				 </div>
				 
				 <div class="cretControls" id="cretTel">
				   <input id="CmpnyTp" type="text" name="cretTel"/>
				 </div>
			 </div>
			 
			 <div class="cretContner">
				 <div class="cretDescrptns">
				   Fax
				 </div>
				 
				 <div class="cretControls" id="cretFax">
				   <input id="CmpnyFax" type="text" name="cretFax"/>
				 </div>
			 </div>
			 
			 <div class="cretContner">
				 <div class="cretDescrptns">
				   Web URL
				 </div>
				 
				 <div class="cretControls" id="cretCmpURL">
				   <input id="CmpnyWebUrl" type="text" name="cretCmpURL"/>
				 </div>
			 </div>
			 
		 </div>
		 
		 <div id="cretCol3" class="creCols">
		     <div class="cretContner">
				 <div id="cretImgPrvw">
				   
				 </div>
				 
				 <div class="cretControls" id="cretFilBrwsr">
				 <input type="file" id="cretFlBrwsr"/>
				   <!--<input type="text" name="cretFlBrwsr" id="cretFlBrwsr"/>
				   <input type="button" value="Browse" name="cretBrwse" class="Button"/>-->
				 </div>
				 
				 <input type="button" value="SAVE" name="cretSave" id="cretSave" onclick="PageConfirmation()"/>
			 </div>
		 </div>
		 
	  </form>
	</div>	   
	
<?php include("footer.php");?>