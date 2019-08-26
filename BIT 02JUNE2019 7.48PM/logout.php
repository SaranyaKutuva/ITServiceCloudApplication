<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		session_start();
		unset($_SESSION['clientId']);
		unset($_SESSION['contractorId']);
		unset($_SESSION['employeeId']);
		unset($_SESSION['username']);
		session_destroy();
	
	?>
	<p> Logged out!!! </p>
</body>
</html>