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

$username = strtolower( trim ($_POST["username"], " \t\n\r\0\x0B") );
$password = sha1 ($_POST["password"]);

$success = false;

$result = mysqli_query($con,"SELECT * FROM USERS WHERE USERNAME='$username'");
	while($row = mysqli_fetch_array($result)) {
		//Get user info
		$user_id = $row['ID'];
		
		$realpass = $row['PASSWORD'];
		if ($password == $realpass) {
			$success = true;
		} 
	}
	
	
	if ($success == 1) {
		session_start();
		
		$_SESSION['logged_in'] = true;
	  	$_SESSION['username'] = $username;
	  	$_SESSION['ID'] = $user_id;
	  	
	  	echo "<script>window.location = \"../dashboard\";</script>";
	  } else {
	  	echo "<script>history.go(-1);</script>";
	  }

?>
                            
                            
                            
                            
                            
                            
                            
                            