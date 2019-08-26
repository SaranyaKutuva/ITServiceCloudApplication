<!DOCTYPE html>
<html>
<head>
<title> Login </title>
</head>
<style>

.pic {
  width: 35%;
  float: left;
  padding: 5px;
   margin: auto;

}

.main {
  width: 65%;
  float: left;
  padding: 15px;
   margin: auto;

}

 input[type=submit], input[type=reset] {
  background-color: #32486b;
  border: none;
  color: white;
  
  text-decoration: none;
  margin: 4px 10px 30px 50px;
 
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


input[type=text],input[type=password], select {
  width: 50%;
  padding: 10px 10px;
 

  border: 1px solid black;
  margin-top: 0px;
  margin-bottom: 10px;
  margin-right: 300px;
  margin-left: 30px;
  background-color: white;

  display: inline-block;
  border: 3px solid #ccc;
  border-radius: 6px;
  
  box-sizing: border-box;
}

label[for=fname], label[for=password],label[for=desc]{

 padding: 0px 30px;
 
font-family: "Times new roman";
font-size: 20px;

}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;

  clear: both;
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

rcorners2 {
  border-radius: 25px;
  border: 2px solid #73AD21;
  padding: 20px; 
  width: 200px;
  height: 150px; 
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

.container {
  padding: 16px;
  background-color: white;
}
.signin {
  background-color: #f1f1f1;
  text-align: center;
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
<script language="javascript" type="text/javascript">
		function validateForm()
		{
			if(document.forms["login"]["username".value.length < 1 || document.forms["login"]["password"].value.length < 1] )
				{
					window.alert("username or password cannot be left empty!");
					return false;
				}
			return true;
		}
		function test()
		{
			window.alert("Test");
		}
	</script>
<body>
<div class="header"  id ="home">

<img src="BitLogo_YellowBlue_1.png" alt="logo" width=100% height=6%/> 

</div>





<div class="topnav" id="topnav">
  <a href="./Homepage3.html">Home</a>
  <a href="./Homepage3.html">Feedback</a>
 <!--<a href="./ClientJobProcess.html" >Client</a>
  <a href="./Contractorlogin.html" >Contractor</a>
  <a href="./stafflogin.html" >Staff</a> -->
  <a href="./Homepage3.html" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Contact</a>
  
   <a href="logout.php" class ="document.getElementById('id01').style.display='block'" style="float:right">Logout</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()"></a>
</div>
<div class="h">

<h2>SIGN IN</h2>

 </div>
<div class=pic>
<img src="login.jpg" alt="logo" width=60% height=70%/> 
</div>


 <form name = "login" method="post" action = "loginpage.php" onSubmit="return validateForm()">
  <div class=main>
  <p class=ex1>


	<br>
    <label for="fname">User Name</label>
    <input type="text" name="uname" placeholder="Enter the UserName.."  required >
<br>

    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Enter the Password.."  required >
<br>

   
  
</p>
<input type="submit" value="Login" name="Submit" >  
<input type="reset" value="Reset">


 
 
</div>
  </div> 
  </form>

 
<hr>
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