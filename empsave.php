
<?php include("connect_db.php"); ?>
<?php
	if ($conn->connect_error)
	{
    	die("Connection failed: " . $conn->connect_error);
    } 
	
	$sql = "INSERT INTO Employee (EmpID,Emp_Name,Ages,Tel,Address,Position,Password,Location,Floor)
    VALUES ('".$_POST["EmpID"]."','".$_POST["Emp_Name"]."','".$_POST["Ages"]."','".$_POST["Tel"]."','".$_POST["Address"]."','".$_POST["Position"]."', '".$_POST["Password"]."','".$_POST["Location"]."','".$_POST["Floor"]."')";

	if ($conn->query($sql) === TRUE) {
    	echo "update Complete!";
    
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<br> Go to <a href='empshow.php'>Show Asset page</a>";
	}
		
		

	$conn->close();
?>