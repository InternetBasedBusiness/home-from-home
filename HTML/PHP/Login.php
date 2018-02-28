<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>

<body><!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>

<body>


	
	<?php
	
		$UserName = $_POST["UserName"];
		$PassWord = $_POST["PassWord"];
		$_SESSION['login_user'] = $_POST["UserName"];
		 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "oop-assignment";
		
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error)
		{
			die("Connection failed: " . $conn->connect_error);
		}
		
		
	//checks to see if the user input is valid
	$result = mysqli_query($conn, "SELECT UserName, PassWord FROM Persons WHERE UserName = '".$UserName."' AND  PassWord = '".$PassWord."'");

	if (mysqli_num_rows($result) > 0) 
	{
		
		Header("Location: http://localhost/Home-from-home/HTML/HomePage.html");
		 
	} 
	else 
	{
		echo "Invalid information, please try again";
		?>
			<br><a href="http://localhost/Home-from-home/HTML/Login.html">Back to Login</a>
		<?php	
		
			
	}
	
	

	$conn->close();
	?>
