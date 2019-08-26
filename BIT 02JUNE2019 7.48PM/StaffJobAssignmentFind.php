<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>

<!-- Navbar division Start -->

<?php
//echo '<div id=jobassignment> Assigned Successfully </div>';
   /*session_start();
	if(!isset($_SESSION['type']))
	{
		header('Refresh: 5; URL=login.php');
		echo("You are not logged in yet! Redirecting you to login page.........");
	}
	else if($_SESSION['type'] !='Employee')
	{
		echo "This page is only available to the staff!!!!!!!";
	}
	else
	{*/
		
		//connect to the file for connection
		//write the query
		//print in a simple table form

		$db = new mysqli();
		$db->connect("localhost","root","","bit");


//echo '<h2> New Job Assignment </h2>';

  $reqdt = strval($_GET['reqdt']);
         $locationid =strval($_GET['locid']);
		 $jobid   = intval($_GET['jobid']);
		  $jobrequestid   = intval($_GET['jobrequestid']);
		
//echo $reqdt;
//echo $locationid;
//echo $jobid;

$db = new mysqli();
		$db->connect("localhost","root","","bit");
	//	$RequestDate = $_POST[RequestDate];
	//	$JobTypeID = $_POST[JobTypeID];
	//	$LocationID = $_POST[LocationID];
	/*	$result = mysqli_query($db,"select bc.* from bit_contractor_availability bca, bit_contractor bc where bc.contractor_id = bca.contractor_id and SUBSTRING(concat(monday, tuesday, Wednesday, Thursday, Friday, Saturday, Sunday), (dayofweek(STR_TO_DATE('" .$row['RequestDate']."','%d/%m/%Y %H:%i:%s')) - 1), 1) = 1 and bca.Contractor_Id in (select Contractor_Id from bit_contractor_skill where skill_id in (select skill_id from bit_job_type where job_type_id = " .$row['Job_Type_Id']. ") and exists(select Suburb from bit_contractor_preferred_suburb where bit_contractor_preferred_suburb.Contractor_Id = bca.Contractor_Id and suburb in (select suburb from bit_client_location where location_id = " .$row['Location_Id'].")))");*/
	
	/*echo "select bc.* from bit_contractor_availability bca, bit_contractor bc where bc.contractor_id = bca.contractor_id and SUBSTRING(concat(monday, tuesday, Wednesday, Thursday, Friday, Saturday, Sunday), (dayofweek(STR_TO_DATE('$reqdt','%d/%m/%Y %H:%i:%s')) - 1), 1) = 1 and bca.Contractor_Id in (select Contractor_Id from bit_contractor_skill where skill_id in (select skill_id from bit_job_type where job_type_id = $jobid) and exists(select Suburb from bit_contractor_preferred_suburb where bit_contractor_preferred_suburb.Contractor_Id = bca.Contractor_Id and suburb in (select suburb from bit_client_location where location_id = $locationid)))";*/
	
	$result = mysqli_query($db,"select bc.*,$jobrequestid jobrequestid from bit_contractor_availability bca, bit_contractor bc where bc.contractor_id = bca.contractor_id and SUBSTRING(concat(monday, tuesday, Wednesday, Thursday, Friday, Saturday, Sunday), (dayofweek(STR_TO_DATE('$reqdt','%d/%m/%Y %H:%i:%s')) - 1), 1) = 1 and bca.Contractor_Id in (select Contractor_Id from bit_contractor_skill where skill_id in (select skill_id from bit_job_type where job_type_id = $jobid) and exists(select Suburb from bit_contractor_preferred_suburb where bit_contractor_preferred_suburb.Contractor_Id = bca.Contractor_Id and suburb in (select suburb from bit_client_location where location_id = $locationid)))");
		echo "<table id=customers border = 1>";
		echo"<tr>
		<th>Job Request Id</th>
    	<th>Contractor Id</th>
		<th>First Name</th>
		<th>Last Name</th>
   		<th>Action</th>
   		</tr>";
		
			while ($row = mysqli_fetch_array($result))
		{
             // echo "<tr><td>karthik</td></tr>"	;		
			echo "<tr>
					  <td>".$row['jobrequestid']."</td>
					  <td>".$row['Contractor_Id']."</td>
					  <td>".$row['FirstName']."</td>
					  <td>".$row['LastName']."</td>
		        	  <td> <button onClick=assign1(".$row['Contractor_Id'].",".$row['jobrequestid'].")>Assign</button></td>
					  </tr>";
			}
		echo "</table>";
		//}
			?>

</div>

</body>
</html>