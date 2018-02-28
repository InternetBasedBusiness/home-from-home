<!DOCTYPE HTML>
<html>  
<body>

<?php		
		
	include 'Db.php';
	// Our database object
	$db = new Db();    

	// Quote and escape form submitted values
	$Water = $db -> quote($_POST['Water']);
	$Fruit = $db -> quote($_POST['Fruit']);
    $Exercise = $db -> quote($_POST['exercise']);
    $Meditation = $db -> quote($_POST['meditation']);
	$DateOfEntry = $db -> quote($_POST['DateOfEntry']);
	
	// Insert the values into the database
	$result = $db -> query("INSERT INTO `achievement` (`water`,`Fruit`,`exercise`,`meditation`, `DateOfEntry`) VALUES (" . $Water . "," . $Fruit . "," . $Exercise . "," . $Meditation . "," . $DateOfEntry . ")");
	
	Header("Location: http://localhost/Home-from-home/HTML/HomePage.html");
	
	
	



?>  

</body>
</html>
