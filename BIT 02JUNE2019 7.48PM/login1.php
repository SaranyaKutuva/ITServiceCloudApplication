<!DOCTYPE html>
<html>
<head>
<title> Login </title>
</head> 
 
 
 <body>
 
 
 <?php
  
  $uname=$_POST['uname'];
  $password=$_POST['password'];
 $db = new mysqli();
		$db->connect("localhost","root","","bit");
	//	$result = mysqli_query($db,"select * from bit_client"); //mysqli_connect("localhost","username","password","database name")
  $result = mysqli_query($db,"Select * from bit_user_logon WHERE 'uname' = '$uname' && 'password' = 'Spassword'");
  $count = mysqli_num_rows($result);
 echo "mysqli_num_rows($result)"; 
 // echo "$result";
/*  echo "$uname";
  echo "<hr>";
  echo "$password";
echo "<mysqli_num_rows($result)>";

echo "$count";*/
  //if ((mysqli_query($db,"Select * from bit_user_logon,bit_client WHERE bit_user_logon.userid = bit_client.user_Id" ) == True)
//	{
	//	echo "Login Success";
		header("refresh:2;url=file:///C:/Users/kkutu/Desktop/BitHomepage/ClientJobProcess.html");
//	}
	//elseif (($count) != 1)
//	{
////		echo "Try again";
	//}
 // else
	//{
		//echo "Please fill valid Details";
		
//	}
  ?>
 </body>
 </html>