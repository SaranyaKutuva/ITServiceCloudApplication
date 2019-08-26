<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>

/* Footer */
.footer {
  padding: 10px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color:#36486b;
   border-radius: 15px;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
}
/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
#topnav {
  overflow: hidden;
 
  background-color: #36486b;
}

/* Navbar links */
#topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  background-color: #36486b;
  padding: 14px;
  text-decoration: none;
}

/* Page content */
.content {
  padding: 16px;
}

/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  position:20px ;
  top: 0;
  width: 100%;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
} 
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
* {
  box-sizing: border-box;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 6px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: Center;
  background-color: #808080;
  color: white;
 
}

</style>
<body>
<!-- Logo division Start -->
<div class="header"  id ="home">

<img src="BitLogo_YellowBlue_1.png" alt="logo" width=100% height=6%/> 

</div>
<!--  Logo division End  -->


<!-- Navbar division Start -->

<div class="topnav" id="topnav">
  <a href="./Homepage3.html">Home</a>
   <a href="./Homepage3.html">Feedback</a>
  <a href="ClientJobRequest.php" >New Job Request</a>
 
  <a href="ClientLogin.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i>Job Progress</a>
  
   <a href="logout.php" class ="document.getElementById('id01').style.display='block'" style="float:right">Logout</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()"></a>
</div>
<div>
<br>
<br>
<br>
</div>
<!--  Navbar division End  -->


<div style="overflow-x:auto;">
    <?php
		//connect to the file for connection
		//write the query
		//print in a simple table form
session_start();
	if(!isset($_SESSION['type']))
	{
		header('Refresh: 5; URL=login.php');
		echo("You are not logged in yet! Redirecting you to login page.........");
	}
	else if($_SESSION['type'] != 'client')
	{
		echo "This page is only available to the staff!!!!!!!";
	}
	else
	{
		$id = $_SESSION['account_Ref'];
		$db = new mysqli();
		$db->connect("localhost","root","","bit");
		$result = mysqli_query($db,"select 
		bit_job_request.JobRequest_Id,
		bit_job_type.Job_Type,
		bit_job_request.RequestDate,
		concat(bit_contractor.FirstName ,' ',bit_contractor.LastName) as ContractorName,
		bit_contractor.PhoneNo,
        bit_job_request.Status
from 	bit_job_request,
		bit_contractor,
        bit_job_type,
        bit_client_location 
where	bit_job_request.Contractor_Id = bit_contractor.Contractor_Id 
AND 	bit_client_location.Location_Id = bit_job_request.Location_Id
AND 	bit_job_type.Job_Type_Id = bit_job_request.Job_Type_Id
AND 	Client_Id = $id ;");
		echo "<table id=customers border = 1>";
		echo"<tr>
   		<th>Job Id</th>
		<th>Job Type</th>
		<th>Requested Date</th>
		<th>Contractor Name</th>
    	<th>Contact Phone Number</th>
		<th>Status</th>
 		</tr>";
			while ($row = mysqli_fetch_array($result))
			{
				echo "<tr>
					  <td>".$row['JobRequest_Id']."</td>
					  <td>".$row['Job_Type']."</td>
					  <td>".$row['RequestDate']."</td>
					  <td>".$row['ContractorName']."</td>
					  <td>".$row['PhoneNo']."</td>
					  <td>".$row['Status']."</td>
					  </tr>";
			}
		echo "</table>";
	}	
		?>
</div>









<!--  Footer division Start -->

<div class="footer">

  <footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  
  <div class="w3-xlarge w3-section">
  </div>
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i>205 Peats Ferry Road Hornsby 2077</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +00 1515123225</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: info@bitservices.com.au</p>
 
</footer>
</div>
<!--  Navbar division End  -->


<!--  Sticky Navbar script Start  -->
<script>
window.onscroll = function() {myFunction()};

var topnav = document.getElementById("topnav");
var sticky = topnav.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    topnav.classList.add("sticky")
  } else {
    topnav.classList.remove("sticky");
  }
}
</script>
<!--  Sticky Navbar script End  -->

</body>
</html>