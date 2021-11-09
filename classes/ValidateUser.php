<?php
include('config.php');

$id=$_POST['id'];

$adds = mysql_query("SELECT * FROM adds where ADD_CITY_ID=".$id, $link);

while($row = mysql_fetch_array($adds))
{
	echo '<a href="viewComAdd.php?id='.$row['ADD_ID'].'"><div class="AddContainer">
			'.$row['ADD_NAME'].'
		  </div></a>';
}
?>