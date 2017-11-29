<?php include("connect_db.php"); ?>
<?php
	if ($conn->connect_error)
	{
    	die("Connection failed: " . $conn->connect_error);
    } 
	
	$sql = "INSERT INTO location (idRoom, roomName, typeRoom, Floor, buildingName, Responsible)
    VALUES ('".$_POST["idRoom"]."','".$_POST["roomName"]."','".$_POST["typeRoom"]."','".$_POST["Floor"]."','".$_POST["buildingName"]."','".$_POST["Responsible"]."')";

	if ($conn->query($sql) === TRUE) {
    	echo "update Complete!";
    
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
		
		

	$conn->close();
?>