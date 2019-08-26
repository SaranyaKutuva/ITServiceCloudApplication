<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
		<?php

			$username = $_POST['uname'];
			$password = $_POST['password'];
	echo $username;
	echo $password;
			$db = mysqli_connect("localhost","root","");
			mysqli_select_db($db,"bit");
//Remember : you may want to do validations again at the server level even when you have client side scripting taking care of it

if(!isset($username) || !isset($password))
{
	echo "Username or password empty!";
}

// We will now check if the username and password are present in Customer tbale if not then check if they are in instructor table, if they are
// then we need to check on the number of records returned if they are not zero then username and password does exist.
// And depending on which table we found the data we will then set a session variable for it. If customer then session variable "customer"
// otherwise "instructor"
	$result1 = mysqli_query($db, "select account_Ref,username, Password from bit_user_logon where account_Type = 'Contractor' and username = '".$username."' and password = '".$password."'");
	$result2 = mysqli_query($db, "select account_Ref,username, Password from bit_user_logon where account_Type = 'Client' and username = '".$username."' and password = '".$password."'");
	$result3 = mysqli_query($db, "select account_Ref,username, Password from bit_user_logon where account_Type = 'Employee' and username = '".$username."' and password = '".$password."'");
	
	if(mysqli_num_rows($result1) > 0){
		$row = mysqli_fetch_array($result1);
		//Remember if you want to set a session variable always rememeber to start the session first
		session_start();
		$_SESSION['type'] = 'Contractor';
		$_SESSION['user_Id'] = $row['User_Id'];
		$_SESSION['account_Ref']= $row['account_Ref'];
		$_SESSION['username'] = $row['username'];
		echo "you are logged in as contractor" .$_SESSION['username'];
		 header("Location: Contractorlogin.php");
	}
	else if(mysqli_num_rows($result2) > 0){
		$row = mysqli_fetch_array($result2);
		//Remember if you want to set a session variable always rememeber to start the session first
		session_start();
		$_SESSION['type'] = 'client';
		$_SESSION['user_Id'] = $row['User_Id'];
		$_SESSION['account_Ref']= $row['account_Ref'];
		$_SESSION['username'] = $row['username'];
		echo "you are logged in as Client" .$_SESSION['username'];
		 header("Location: ClientLogin.php");
	}
	else if(mysqli_num_rows($result3) > 0){
		$row = mysqli_fetch_array($result3);
		//Remember if you want to set a session variable always rememeber to start the session first
		session_start();
		$_SESSION['type'] = 'Employee';
		$_SESSION['user_Id'] = $row['User_Id'];
		$_SESSION['account_Ref']= $row['account_Ref'];
		$_SESSION['username'] = $row['username'];
		echo "you are logged in as Employee" .$_SESSION['username'];
		header("Location: stafflogin.php");
	}
	else
	{
		echo "username and password don't match, please try again!";
	}
	?>
</body>
</html>