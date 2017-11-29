<?php include("connect_db.php"); ?>
<?php
	if ($conn->connect_error)
	{
    	die("Connection failed: " . $conn->connect_error);
    } 
	
	$sql = "INSERT INTO Utility (id, Utility_Name, Room, Floor, Location, Reponsible, IDNumber)
    VALUES ('".$_POST["id"]."','".$_POST["Utility_Name"]."','".$_POST["Room"]."','".$_POST["Floor"]."','".$_POST["Location"]."','".$_POST["Reponsible"]."', '".$_POST["IDNumber"]."')";

	if ($conn->query($sql) === TRUE) {
    	echo "update Complete!";
    
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
		
		

	$conn->close();
?>