<!DOCTYPE html>
<html>
<head>
	<title>Diary Entry</title>
</head>

<body>
	
	
	<?php
	
	
	//inheratence of the Db class 
	include 'Db.php';
	
	// Our database object
	$db = new Db();    

	// Quote and escape form submitted values
	$DiaryEntry = $db -> quote($_POST['DiaryEntry']);
	$DiaryEntry_2 = $db -> quote($_POST['DiaryEntry_2']);
	$DiaryEntry_3 = $db -> quote($_POST['DiaryEntry_3']);
	$DiaryEntry_4 = $db -> quote($_POST['DiaryEntry_4']);
	$DiaryEntry_5 = $db -> quote($_POST['DiaryEntry_5']);
	$DateOfEntry = $db -> quote($_POST['DateOfEntry']);
	
	
	// Insert the values into the database
	$result = $db -> query("INSERT INTO `Diary_Entries` (`DiaryEntry`,`DiaryEntry_2`,`DiaryEntry_3`,`DiaryEntry_4`,`DiaryEntry_5`,`DateOfEntry`)
	VALUES (" . $DiaryEntry . "," . $DiaryEntry_2  . "," . $DiaryEntry_3 . "," . $DiaryEntry_4 . "," . $DiaryEntry_5 . "," . $DateOfEntry . ")");
	
	//link to back to the dashboard
	Header("Location: http://localhost/Home-from-home/HTML/HomePage.html");
	
	
	?>
	

</body>

</html>