<!DOCTYPE html>
<html>
    <head>
        <title>TrackHapp</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="./javascript/images.js" type="text/javascript"></script>
        <script src="dropmenu.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>  
      </head>

<body class="container">
        
    <div class="header image">
        
    <img src="./images/banner.png" alt="main_banner" width="2400px" height="300px" />
    </div>
        


  <div class="container-fluid">
    	<nav class="navbar navbar-default"">			
				<ul>
					<li><a href="home_page.html" alt="Happy on the Go!">Home-From-Home</a></li>					
					<li><a href="home_page.html" alt="Back home!">Home</a></li>
					<li><a href="features.html" alt="Check out the product!">Features</a></li>
					<li><a href="#" alt="We love to hear from you!">Contact Us</a></li>
					<br/>
				</ul>
		</nav>	

	
</body>
</html>

<?php

	//user input from assignment.html
	$DateSearch = $_POST["DateSearch"];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "oop-assignment";
		

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
		
	//muiltiple querys for the databace to fetch information for
	
	$sql = "SELECT DiaryEntry , DiaryEntry_2 , DiaryEntry_3 , DiaryEntry_4 , DiaryEntry_5, DateOfEntry  FROM Diary_Entries Where DateOfEntry = '$DateSearch'";
	$result = mysqli_query($conn, $sql);
	
	$sql_2 = "SELECT water , Fruit , exercise, meditation , DateOfEntry FROM achievement Where DateOfEntry = '$DateSearch'";
	$result_2 = mysqli_query($conn, $sql_2);
	
	if (mysqli_num_rows($result) && mysqli_num_rows($result_2) > 0) 
	{
		//desplay the data from the database
		while($row = mysqli_fetch_assoc($result)) 
		{
		
			
			echo "Date " . $row["DateOfEntry"]. "<br><br>";
			
			echo "Address line 1 " . $row["DiaryEntry"]. "<br><br>";
			
			echo "Address line 2 " . $row["DiaryEntry_2"]. "<br><br>";
			
			echo "Address line 3 " . $row["DiaryEntry_3"]. "<br><br>";
			
			echo "Contry " . $row["DiaryEntry_4"]. "<br><br>";
			
			echo "Payment details " . $row["DiaryEntry_5"]. "<br><br><br><br><br>";
		}
		
		while($row_2 = mysqli_fetch_assoc($result_2))
		{
			

			echo "Loins: ". $row_2["water"]. "<br><br>";

			echo "Tayto: ". $row_2["Fruit"]. "<br><br>";

			echo "Jacobs: ". $row_2["exercise"]. "<br><br>";

			echo "Jacobs: ". $row_2["meditation"]. "<br><br>";
	
			
			
		}
			
	} 
	else 
	{
		echo "Oops. No data has been recorded for this day.";
	}

	mysqli_close($conn);
?>	
	


	