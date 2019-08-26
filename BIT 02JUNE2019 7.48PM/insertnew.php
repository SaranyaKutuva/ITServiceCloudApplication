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


  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $address = $_POST['address'];
  $suburb = $_POST['suburb'];


  $postcode = $_POST['postcode'];

  $email = $_POST['email'];

  $phone= $_POST['phone'];

  $licnum = $_POST['licnum'];

  $dob = $_POST['dob']; // Then change the format

  $state = $_POST['state'];
  $password = $_POST['pwd'];

	//$mysqli = new mysqli();

		//$db = mysqli_connect("localhost","root","","fastdrivers");

  $queryStr = "insert into customer(firstname,surname,street,suburb,state,postcode,lisencenumber,dob,email,mobilenumber,username,password) values('".$fname."','".$lname."','".$address."','".$suburb."','".$state."','".$postcode."','".$licnum."','".$dob."','".$email."','".$phone."','".$lname."','".$password."')";



if($db->query($queryStr) ===TRUE){

 echo "<h3> Registration completed successfully! </h3>";

}else
{
  echo "<h3> Something went wrong </h3>";
}
/* 1. Get the pattern matching working on client side. Post, Email and Phone - Regex
   2. check atleast for password length
   3. Mask the password field
   4. Proper format on dates */
?>