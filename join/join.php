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

$firstName = trim ($_POST["firstName"], " \t\n\r\0\x0B");
$lastName = trim ($_POST["lastName"], " \t\n\r\0\x0B");
$username = strtolower( trim ($_POST["username"], " \t\n\r\0\x0B") );
$password = sha1 ($_POST["password"]);
$email = $_POST["email"];
$referral = trim ($_POST["referral"], " \t\n\r\0\x0B");
$lat = $_POST["lat"];
$lng = $_POST["lng"];
//Don't trust the user!
$IP = $_SERVER['REMOTE_ADDR'];
$agree = "on";

$code = rand(100000, 999999);

$signUp = true;

$query = mysqli_query($con, "SELECT * FROM USERS WHERE username='".$username."'");

if ($query->num_rows != 0) {
	echo "Error: username already exists.";
	$signUp = false;
} else {
  	//echo "New username!";
}

if (!($agree === 'on')) {
	echo "Please accept the terms and conditions.<br>";
	$signUp = false;
	echo "<a href=\"https://electronneutrino.com/strii/join/index.php?q=" . $referral . "\">Back to sign up</a>";
}

if ($signUp) {
	mysqli_query($con, "
		INSERT INTO USERS (FIRST_NAME, LAST_NAME, USERNAME, PASSWORD, LATITUDE, LONGITUDE, IP, EMAIL, CODE)
		VALUES ('$firstName','$lastName','$username', '$password', '$lat', '$lng', '$IP', '$email', '$code')
	");
	
	
//Referral stuff
$result = mysqli_query($con,"SELECT * FROM USERS WHERE ID='$referral'");
	while($row = mysqli_fetch_array($result)) {
		//Get user info
		$refNum= $row['REFERRALS'];
		$newRefNum = $refNum + 1;
		$success = mysqli_query($con, "
			UPDATE USERS
			SET REFERRALS='$newRefNum'
			WHERE ID='$referral';
		");
	}  	
}

//Create user page
$path = preg_replace("/[^ \w]+/", "", $username);
$path = strtolower($path);
$path = "../s/" . $path; //Exit out of /join directory and into /s directory
//Create pages
mkdir($path . "/dashboard/", 0777, true);
mkdir($path . "/calendar/", 0777, true);
mkdir($path . "/share/", 0777, true);
mkdir($path . "/settings/", 0777, true);

//Create index file
$file = $path . '/index.php';
file_put_contents($file, '
Hi!
');

$file = $path . '/dashboard/index.php';
file_put_contents($file, "
<script>window.location = \"https://electronneutrino.com/as/dashboard/\";</script>
");

$file = $path . '/calendar/index.php';
file_put_contents($file, '<h1>Calendar, ' . $path . '!</h1>');

$file = $path . '/share/index.php';
file_put_contents($file, '<h1>Share, ' . $path . '!</h1>');

$file = $path . '/settings/index.php';
file_put_contents($file, '<h1>Settings, ' . $path . '!</h1>');
	
	
	
$user_id = 0;

$result = mysqli_query($con,"SELECT * FROM USERS WHERE USERNAME='$username'");
	while($row = mysqli_fetch_array($result)) {
		//Get user info
		$user_id = $row['ID'];
	}
	
	session_start();
	
	if ($signUp) {
		$_SESSION['logged_in'] = true;
	} else {
		$_SESSION['logged_in'] = false;
	}
  	$_SESSION['username'] = $username;
  	$_SESSION['ID'] = $user_id;
  	
  	
  	if ($signUp) {
  		echo "<script>window.location = \"../s/" . $username . "/dashboard\";</script>";
  	}


?>
                            
                            
                            
                            
                            
                            
                            
                            