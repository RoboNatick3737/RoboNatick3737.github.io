<?php

/*================CONNECTION================*/

// Create connection
$con=mysqli_connect("localhost","elecvqts_numbatU","ADG_Software.php","elecvqts_numbat");

// Check connection
if (mysqli_connect_errno()) { //If there is some error in the connection (this should NEVER happen)
	$connection_error = true;
	
	echo "Failed to connect to MySQL: " . mysqli_connect_error() . "<br>";
	
} else {
	//echo "Connection successful.";
}

if ($connection_error) {//If connection error
	exit("Execution terminated. Exit code: \"Unable to connect to database.\"");//Terminate execution
}

session_start();
$ID = $_SESSION['ID'];

$lat = $_POST["lat"];
$lng = $_POST["lng"];

$success = mysqli_query($con, "
	UPDATE USERS
	SET LATITUDE='$lat', LONGITUDE='$lng'
	WHERE ID='$ID';
");

header("Location: https://electronneutrino.com/as/settings/");
die();

?>
                            
                            
                            
                            
                            
                            
                            
                            