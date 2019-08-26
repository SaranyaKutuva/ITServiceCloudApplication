<?php
$val0 = $_POST[ 'val0' ];
$functionId = $_POST[  'functionid' ];

$result = -1;
if( $functionId == 0 ) $result = getLocationAddress( $val0);
else $result = someotherfunction( $val0, $val1 );

# echo this to return result to ajax
echo $result


function getLocationAddress($locid){
  $db = new mysqli();
	$db->connect("localhost","root","","bit"); 
	$query = mysqli_query($db,"select StreetAddress,Suburb,State,PostCode from bit_client_location where Client_Id = 2;");
	while ($row = mysqli_fetch_array($query))
			{
				$location = $row['StreetAddress'];
			}
	// echo "<p>karthik</p>";
	
	 return $location ;
}


?>