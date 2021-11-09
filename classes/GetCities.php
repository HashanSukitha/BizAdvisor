<?php
include('config.php');


$id=$_GET['id'];
$window=$_GET['window'];

$cities = mysql_query("SELECT * FROM cities where DISTRICT_ID=".$id, $link);
 

if($window=="MainSrch")
{
	while($row = mysql_fetch_array($cities))
	{
		echo '<div class="A_city"><a href="javascript:selectedCity('.$row['CITY_ID'].',\''.$row['CITY'].'\')">'.$row['CITY'].'</a></div>';
	}
}
elseif($window=="CrtPG")
{
	while($row = mysql_fetch_array($cities))
	{
		echo '<div class="A_city"><a href="javascript:selectedCityCrtPG('.$row['CITY_ID'].',\''.$row['CITY'].'\')">'.$row['CITY'].'</a></div>';
	}

}

?>
