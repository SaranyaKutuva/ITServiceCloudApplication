<?php
	// this is where we bring in the posted data
	/* 1. Make database connection
	2. Run the query
	3. Let the user know of successful registration
	4. Validations that might be needed here as well
	5. Exception Handling
	*/
  //require (connection.php);
$db = new mysqli();
$db->connect("localhost","root","","bit");


  $jobid = $_POST['jobRequest_id'];
//  $contractorid = $_POST['contractorid'];
//  $contractorname = $_POST['contractorname'];
 // $date = $_POST['date'];


  $hours = $_POST['hours'];

  $km = $_POST['km'];
  
  echo '<BR>';
echo $_POST["jobRequest_id"];
echo '<BR>';
echo $_POST["hours"];
echo '<BR>';
echo $_POST["km"];
echo '<BR>';

  $queryStr = "update bit_job_request set Hours_Worked = $hours,KiloMeterTravelled = $km where JobRequest_Id =$jobid";



if($db->query($queryStr) ===TRUE){

 echo '<h3> Payment Details Sent successfully! </h3>';

}else
{
  echo '<h3> Something went wrong </h3>';
}
//1. Get the pattern matching working on client side. Post, Email and Phone - Regex
 //  2. check atleast for password length
 //  3. Mask the password field
//   4. Proper format on dates */
?>