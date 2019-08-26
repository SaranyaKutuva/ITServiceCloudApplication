<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
/* This is normal code behind file that will get all the bookings from*/


$db = new mysqli();
$db->connect("localhost","root","","bit");


  $id = intval($_GET['jobid']);
  $status =strval($_GET['status']);
 echo $status;
//$id = intval($_GET['jobid']);
	//echo "$_GET[jobid]";
	//echo "Karthik";
	
		
	$queryStr = "update bit_job_request set status ='$status' where JobRequest_Id =$id";
	//  $queryStr = "update bit_job_request set Hours_Worked = $hours,KiloMeterTravelled = $km where JobRequest_Id =$jobid";
echo $queryStr;
	



if($db->query($queryStr) ===TRUE){

 echo '<h3> Payment Details Sent successfully! </h3>';

}else
{
  echo '<h3> Something went wrong </h3>';
}
	
//	$result = mysqli_query($conn,$queryStr);
	
//	mysqli_close($conn);
	
?>

</body>
</html>