<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>

<!-- Navbar division Start -->
<form>
<?php

$db = new mysqli();
		$db->connect("localhost","root","","bit");
	
         $contractorid =intval($_GET['contractorid']);
		  $jobrequestid =intval($_GET['jobrequestid']);
		 
	//echo $contractorid;

$queryStr = mysqli_query($db,"update bit_job_request set Status='Assigned',Contractor_Id=$contractorid where JobRequest_Id=$jobrequestid");

	



if($db->query($queryStr) === TRUE){

 echo '<h3> Contractor Assigned Successfully! </h3>';

}else
{
  echo "Error: ".$queryStr. "<br>".$db->error;
  echo '<h3> Something went wrong 1 </h3>';
}
	
//	$result = mysqli_query($conn,$queryStr);
	
	mysqli_close($db);
	
?>




</body>
</html>