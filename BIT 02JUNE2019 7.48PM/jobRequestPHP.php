<?php
$db = new mysqli();
$db->connect("localhost","root","","bit");

$jobId      = $_POST['jobId'];
$locationId = $_POST['locationId'];

$date       = $_POST['date'];
$priority   = $_POST['priority'];
$comments   = $_POST['comments'];
echo $_POST["jobId"];
echo '<BR>';
echo $_POST["locationId"];
echo '<BR>';
echo $_POST["date"];
echo '<BR>';
echo $_POST["priority"];
echo '<BR>';

echo $_POST["comments"];
$queryStr = "insert into bit_job_request(Job_Type_Id,Location_Id,RequestDate,Priority,Comments,status) values (".$jobId.",".$locationId.",'".$date."','".$priority."','".$comments."','REQUESTED')";

if($db->query($queryStr) === TRUE)
{
echo "<h3> Job Added Successfully! </h3>";

}
else
{
	echo "Error: " . $queryStr . "<br>" . $db->error;
echo "<h3> Something Went Wrong </h3>"; 
}
?>