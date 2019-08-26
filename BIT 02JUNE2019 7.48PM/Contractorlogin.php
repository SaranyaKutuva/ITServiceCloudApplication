<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Contractor Job Assignment Form</title>
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

.btndisabled
{
	border: 1px solid #999999;
	background-color: #cccccc;
	color: #666666;
  
}
.btnEnabled {
  background-color: #32486b;
  border: none;
  color: white;
  
  text-decoration: none;
  margin: 0px 0px 5px 5px;
  border-radius: 10px;
  cursor: pointer;
  
  display: inline-block;
  padding: 3px 10px;
  font-size: 14px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
 
 
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
 
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 12px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #808080;
  color: white;
 
}
</style>
<body>
<div class="header"  id ="home">

<img src="BitLogo_YellowBlue_1.png" alt="logo" width=100% height=6%/> 

</div>

<div class="topnav" id="topnav">
  <a href="./Homepage3.html">Home</a>
  
  <!--<a href="/Homepage3.html" >About Us</a>-->
  <a href="./Homepage3.html">Feedback</a>
  <a href="Contractorlogin.php">Jobs</a>
  <a href="ContractorJobCompleted.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i>Payment Details</a>
  
   <a href="logout.php" class ="document.getElementById('id01').style.display='block'" style="float:right">Logout</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()"></a>
</div>
<h2>Contractor Login</h2>
<p id=res1 ></p>
<div style="overflow-x:auto;">
   <?php
   session_start();
	if(!isset($_SESSION['type']))
	{
		header('Refresh: 5; URL=login.php');
		echo("You are not logged in yet! Redirecting you to login page.........");
	}
	else if($_SESSION['type'] != 'Contractor')
	{
		echo "This page is only available to the staff!!!!!!!";
	}
	else
	{
		//connect to the file for connection
		//write the query
		//print in a simple table form
		$id = $_SESSION['account_Ref'];

		$db = new mysqli();
		$db->connect("localhost","root","","bit");
		$result = mysqli_query($db,"select	bit_job_request.JobRequest_Id, 
		bit_job_type.Job_Type, 
        bit_job_request.RequestDate, 
        bit_client.PhoneNo, 
        
        concat(bit_client_location.StreetAddress,' ',bit_client_location.Suburb,' ',bit_client_location.State,' ',bit_client_location.PostCode)as Client_Address,
        concat(bit_client.ContactFirstName ,' ',bit_client.ContactLastName) as ClientName,
        bit_job_request.Status 
from 	bit_job_request, 
		bit_client, 
        bit_job_type, 
        bit_client_location 
where 	bit_job_request.Job_Type_Id = bit_job_type.Job_Type_Id 
and 	bit_client.Client_Id = bit_client_location.Client_Id 
and 	bit_job_request.Location_Id = bit_client_location.Location_Id");
		echo "<table id=customers border = 1>";
		echo"<tr>
   		<th>Job_Id</th>
		<th>Job Type</th>
		<th>Requested Date</th>
		<th>Contractor Name</th>
    	<th>Contact Phone Number</th>
		<th>Address</th>
		<th>Status</th>
		<th>Status</th>
		<th>Status</th>
 		</tr>";
			while ($row = mysqli_fetch_array($result))
			{
				echo "<tr>
					  <td>".$row['JobRequest_Id']."</td>
					  <td>".$row['Job_Type']."</td>
					  <td>".$row['RequestDate']."</td>
					  <td>".$row['ClientName']."</td>
					  <td>".$row['PhoneNo']."</td>
					  <td>".$row['Client_Address']."</td>";
		     
                  if ($row['Status'] == 'Accepted')
				  {
					 
						echo "<td><button class=btndisabled id=btndisabled disabled>".$row['Status']."</button></td>"; 
						echo "<td><button class=btndisabled id=btndisabled disabled> Rejected</button></td>";
						echo "<td><button class=btnEnabled id=\"btnEnabled\" value =".$row['JobRequest_Id']." onclick=\"accept(this.value,this,'Completed')\">Completed</button></td>";
					  
				  }
				  else if($row['Status'] == 'Rejected')
				  {
					  
						echo "<td><button class=btndisabled disabled>Accepted</button></td>";
						echo "<td><button class=btndisabled disabled>Rejected</button></td>"; 
						echo "<td><button class=btndisabled disabled>Completed</button></td>";
						
				  }
				   else if($row['Status'] == 'Completed')
				  {
					//	echo "<td><button id=caccept class=\"btnEnabled\" disabled value =".$row['JobRequest_Id']." //onclick=\"accept(this.value,this,'Accepted')\"> Accepted</button></td>";
						echo "<td><button class=btndisabled disabled>Accepted</button></td>";
						echo "<td><button class=btndisabled disabled>Rejected</button></td>"; 
						echo "<td><button class=btndisabled disabled>Completed</button></td>";
						
				  }
				  else if($row['Status'] == 'Assigned')
				  {
						echo "<td><button id=caccept class=\"btnEnabled\" value =".$row['JobRequest_Id']."  onclick=\"accept(this.value,this,'Accepted')\">Accepted</button></td>";
						echo "<td><button id=caccept class=\"btnEnabled\" value =".$row['JobRequest_Id']." onclick=\"accept(this.value,this,'Rejected')\">Rejected</button></td>"; 
						echo "<td><button class=btndisabled disabled>Completed</button></td>";
				  }
				  else
				  {
						echo "<td><button class=btndisabled disabled>Accepted</button></td>";
						echo "<td><button class=btndisabled disabled>Rejected</button></td>"; 
						echo "<td><button class=btndisabled disabled>Completed</button></td>";
				  }
					  
					  echo "</tr>";
			}
		echo "</table>";
		
	}	
		?>
		<script>
		function accept(jobid,object,status)
		{
			//alert("Hi object " + object.value + status);
			if(jobid == "")
			{
				
				document.getElementById("JobDetails").innerHTML = "";
				
				return;
			}
			else
			{
				alert("Hi " + jobid);	
			
				xmlhttp = new XMLHttpRequest();
				object.disabled =true;
				
				xmlhttp.onreadystatechange = function()
				{
					//alert(this.responseText +  " " + this.readystate  +  " " + this.status);
					if(this.readystate == 4 || this.status == 200)
					{
						//alert(this.responseText);
						document.getElementById("res1").innerHTML =this.responseText;
						document.getElementById("caccept").disabled =true;
					//	document.getElementById("caccept").disabled =true;
						document.getElementById("caccept").disabled =false;
						document.getElementById("caccept").className ="btndisabled";
						document.getElementById("caccept").className ="btnEnabled";
						
						
					}				
			    }   
				
			   xmlhttp.open("GET","AcceptJob.php?jobid=" + jobid +"&status=" + status, true);
			    //xmlhttp.setRequestHeader("Cache-Control", "max-age=0");
			   xmlhttp.send();
			  
			
		    }
		 
		}
		
		</script>
</div>

<div>

<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br><br><br>
<br>
<br>
<br>
<br>
<br>
</div>

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
</body>
</html>