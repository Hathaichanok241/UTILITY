<?php
ini_set('display_errors', 1);
error_reporting( error_reporting() & ~E_NOTICE );

$servername	  = "mysql56";
$username	  = "utilityreport_y";
$password     = "123456report";
$dbname	      = "utilityreport_utilityreport";

$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_errno())
{
	echo "Database Connect Failed : " . mysqli_connect_error();
	exit();
}

mysqli_set_charset($conn, "utf8");

?>