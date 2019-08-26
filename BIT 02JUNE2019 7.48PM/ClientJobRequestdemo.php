<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
 input[type=submit], input[type=reset] {
  background-color: #32486b;
  border: none;
  color: white;
  
  text-decoration: none;
  margin: 30px 30px 3px 300px;
 
  border-radius: 10px;
  cursor: pointer;
  
  display: inline-block;
  padding: 10px 25px;
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
[title~=login] {
  border: 5px solid yellow;
}

/*fieldset
{
margin-top: 0px;
  margin-bottom: 0px;
  margin-right:100px;
  margin-left: 0px;
  font-size: 16px;
 
}*/

input[type=text],input[type=date],input[type=time],input[type=number],select {
  width: 60%;
  padding: 10px 10px;
 

  border: 1px solid black;
  margin-top: 0px;
  margin-bottom: 0px;
  margin-right: 300px;
  margin-left: 300px;
  background-color: white;

  display: inline-block;
  border: 3px solid #ccc;
  border-radius: 6px;
  
  box-sizing: border-box;
}

label{

 padding: 0px 300px;
 
font-family: "Times new roman";
font-size: 20px;

}
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

.h{
font-family: Verdana;
align: justify;
margin: 0px 0px 0px 500px;


}

</style>
<body>

<?php
	
	function phpLocChange(){
	 /*if(isset($_GET["Location"])){
       $location=$_GET["Location"];
       echo "select location is => ".$location;
	   $db = new mysqli();
	$db->connect("localhost","root","","bit"); 
	$query = mysqli_query($db,"select StreetAddress,Suburb,State,PostCode from bit_client_location where Client_Id = 2;");
	$query_display = mysqli_query($db,"SELECT * FROM bit_client_location where ");
	echo "<table id=customers border = 1>";
		echo"<tr>
   		<th>Street</th>
		
 		</tr>";
			while ($row = mysqli_fetch_array($query))
			{
				echo "<tr>
					  <td>".$row['StreetAddress']."</td>					
					  </tr>";
			}
		echo "</table>";
     }*/
		$db = new mysqli();
		$db->connect("localhost","root","","bit"); 
		$query = mysqli_query($db,"select StreetAddress,Suburb,State,PostCode from bit_client_location where Client_Id = 2;");
		while ($row = mysqli_fetch_array($query))
			{
				$location = $row['StreetAddress'];
			}
	
	
	 return $location ;
	}
	
	?>
<script>
function locationChange(){
	alert(document.cjobreq.loc1.selectedIndex);
	alert(document.cjobreq.loc1.options[document.cjobreq.loc1.selectedIndex].value);
	//b = "<?=phpLocChange();?>"; 
//	b = "<?=phpLocChange();?>";
	//b = "<?=phpLocChange();?>";
	$.ajax({ url: "allFunctions.php",
    data: {val0:1, functionid: 0 },
	type: 'post'
     }).done( function( result ) { alert( "kk " + result ); });
	//document.append(b);
	alert(b);
}
</script>
<!--Logo division Start -->
<div class="header"  id ="home">

<img src="BitLogo_YellowBlue_1.png" alt="logo" width=100% height=6%/> 

</div>
<!-- Logo division End -->


<!-- Navbar division Start -->

<div class="topnav" id="topnav">
  <a href="./Homepage3.html">Home</a>
  <a href="./Homepage3.html">Feedback</a> 
  <a href="ClientJobRequest.php">New Job Request</a>
 
  <a href="ClientLogin.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i>Job Progress</a>
  
   <a href="./loginbit.html" class ="document.getElementById('id01').style.display='block'" style="float:right">Logout</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()"></a>
</div>
<!-- Navbar division End -->

<!-- Header division Start pattern="[A-Za-z]{3}" -->
<div class="h">

<h2>Client Job Request Form</h2>

</div>
<!--  Header division End -->


  <form action="/action_page.php" name="cjobreq">
  
  <p class=ex1>
 
<label for="ClientId">Client Id</label>
    <input type="text" id="id" name="clientId" placeholder="Id of the Client" readonly>
<br>
 <label for="name">Client Name</label>
    <input type="text" id="fname" name="name" placeholder="Name of the Client" readonly>
<br>
 <label for="jobType">Job Type</label>
<?php
$db = new mysqli();
$db->connect("localhost","root","","bit"); 

echo "<select name= 'Select a jobType'>";
echo '<option value="">'.'--- Please Select JobType ---'.'</option>';
//$query=mysqli_query($con,"SELECT id,FirstName FROM persons");
$query = mysqli_query($db,"SELECT job_type FROM bit_job_type");
$query_display = mysqli_query($db,"SELECT * FROM bit_job_type");
while($row=mysqli_fetch_array($query))
{
    echo "<option value='". $row['job_type_id']."'>".$row['job_type']
 .'</option>';
}
echo '</select>';
?>

  <label for="location">Location</label>

	<?php
$db = new mysqli();
$db->connect("localhost","root","","bit"); 

echo "<select id ='loc1' onchange=\"locationChange()\"  Name= \"Location\">";
echo '<option value="">'.'--- Please Select a Location ---'.'</option>';
$query = mysqli_query($db,"select Location_Name,Location_Id from bit_client_location where Client_Id = 2;");
$query_display = mysqli_query($db,"SELECT * FROM bit_client_location");
while($row=mysqli_fetch_array($query))
{
    echo "<option value='".$row['Location_Id']."'>".$row['Location_Name'].'</option>';
}
echo '</select>';
?>



	<p id="demo"></p>


	<label for="date">Request Date</label>
		
	<input type="date" id="datepicker" name="date" max=$d required>
	<br>
<!--	<label for="time">Request Time</label>
	<input type="time" id="time" name="time"  required> -->
	<label for="priority">Priority</label>
	<select id="job" name="job">
      <option value="client">Low</option>
      <option value="admin">Medium</option>
      <option value="contractor">High</option>
	</select>
	<br>
	<!--<<label for="Address">Street Address</label>
	
	
	
	
	
	//<br>
	label for="Suburb">Suburb</label>
	<input type="text" id="text" name="text" required>
	<br>
	<label for="State">State</label>
	<input type="text" id="text" pattern="[A-Za-z]{3}" name="text" required>
	<br>
	<label for="PostCode" paattern="{4}">PostCode</label>
	<input type="number" id="text" name="text" required>-->
	<label for="Comments" >Comments</label>
	<input type="text" id="comments" name="text"> 
	<br>
	

   


  
</p>
<input type="submit" value="Submit">  
<input type="reset" value="Reset">
 
</div>
  </div> 
  </form>

	


<!-- Footer division Start -->

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
<!-- Navbar division End -->
<script type="text/javascript">

var dateToday = new Date();
var dates=$("#date").datepicker({
defaultDate: "+1w",
changeMonth: true;
numberOfMonths: 3,
minDate: dateToday,
onselect: function(selectedDate)
{
	var option= this.id == "from"? "minDate" : "maxDate", instance= $(this).data("datepicker"),
	date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
	dates.not(this).datepicker("option",option,date);
	}

});




</script>

<!-- Sticky Navbar script Start -->
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
<!-- Sticky Navbar script End -->

</body>
</html>