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
 input[type=submit], input[type=reset] {
  background-color: #32486b;
  border: none;
  color: white;
  
  text-decoration: none;
  margin: 30px 0px 10px 600px;
 
  border-radius: 10px;
  cursor: pointer;
  
  display: inline-block;
  padding: 10px 20px;
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
.h{
font-family: Verdana;
align: justify;
margin: 0px 0px 0px 500px;


}

input[type=text],input[type=date],input[type=number],select {
  width: 30%;
  padding: 10px 10px;
 

  border: 1px solid black;
  margin-top: 0px;
  margin-bottom: 0px;
  margin-right: 300px;
  margin-left: 500px;
  background-color: white;

  display: inline-block;
  border: 3px solid #ccc;
  border-radius: 6px;
  
  box-sizing: border-box;
}

label{

 padding: 0px 500px;
 
font-family: "Times new roman";
font-size: 20px;

}
</style>
<body>
<form action="jobpayment.php" method="post">
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
		/*<!-- Logo division Start -->*/
		echo '<div class="header"  id ="home">';

		echo '<img src="BitLogo_YellowBlue_1.png" alt="logo" width=100% height=6%/>';

		echo '</div>';
			//<!--  Logo division End  -->

			//<!-- Navbar division Start -->

		echo '<div class="topnav" id="topnav">';
		echo '<a href="./Homepage3.html">Home</a>';
  
			// <!--<a href="/Homepage3.html" >About Us</a>-->
		echo '<a href="./Homepage3.html">Feedback</a>';
		echo '<a href="Contractorlogin.php">Jobs</a>';
  
		echo '<a href="ContractorJobCompleted.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i>Payment Details</a>';
  
		echo '<a href="logout.php"  style="float:right">Logout</a>';
		//echo ' <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()"></a>';
		echo '</div>';
		//<!--  Navbar division End  -->

		echo '<form action=jobpayment.php">';
  
		echo '<p class=ex1>';
 
		/*<!--<label for="ClientId">Client Id</label>
		<input type="text" id="id" name="clientId" placeholder="Id of the Client">
		<br>
		<label for="name">Client Name</label>
		<input type="text" id="name" name="name" placeholder="Name of the Client">
		<br>-->*/

		echo '<label for="ClientId">Job Id</label>';

	
		$db = new mysqli();
		$db->connect("localhost","root","","bit"); 

			echo "<select Name=jobRequest_id>";
			echo '<option value="">'.'--- Please Select JobId ---'.'</option>';

			$query = mysqli_query($db,"SELECT jobRequest_id FROM bit_job_request where status = 'Assigned'");
			$query_display = mysqli_query($db,"SELECT * FROM bit_job_request");
			while($row=mysqli_fetch_array($query))
			{
				echo "<option value='". $row['jobRequest_id']."'>".$row['jobRequest_id']
				.'</option>';
			}
			echo '</select>';
	
		

			/*<!--<label for="ContractorId">Contractor Id</label>
			<input type="text" id="contractorid" name="clientId" placeholder="Id of the Contractor" disabled>
			<br>
			<label for="Contractorname">Contractor Name</label>
			<input type="text" id="contractorname" name="name" placeholder="Name of the ContractorName" disabled>
			<br>

			<label for="date">Date Completed</label>
			<input type="date" id="date" name="date"  min="today">
			<br>-->*/
	

			echo '<label for="HoursWorked">Hours Worked</label>';
			echo '<input type="number" id="hours" name="hours" pattern=[0-9] placeholder="Enter the Number of Hours Worked" required>';
			echo '<br>';
			echo ' <label for="km">Km Travelled</label>';
			echo ' <input type="number" id="km" name="km" placeholder="Enter the Kilometer Travelled" required>';
			echo '<br>';
	

	
	
  
	echo '	</p>';
echo '<input type="submit" action="jobpayment.php" value="Send For Payment">'; 
echo '<!--   <input type="reset" value="Reset">-->';
}
?>
 
 
</div>
  </div> 
  </form>

<!-- 1. Get the pattern matching working on client side. Post, Email and Phone - Regex
   2. check atleast for password length
   3. Mask the password field
   4. Proper format on dates -->


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