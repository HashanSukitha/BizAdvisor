<?php
include('../config.php');

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM user");


?>
<html>
<head>
  <link rel="stylesheet" href="../css/styles.css" type="text/css"/>
</head>

<body>

<div id="container">
  <h2>Registered User Details</h2>
<?php

echo "<table id='selectTable'>
<tr>
<th>Name</th>
<th>Addresas</th>
<th>Telephone Number</th>
<th>Date of Birth</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
   echo "<td>" . $row['tp'] . "</td>";
    echo "<td>" . $row['DOB'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
  <div id="selectArea">
	     <h4><a href="../index.html">Home</a></h4>
	   </div> 
</div>

</body>
</html>