<?php
	session_start();
              	$li = $_SESSION["logged_in"];
              	if ($li == 1) {}
              	else {
              		echo "
              		<meta http-equiv=\"refresh\" content=\"0; URL='http://electronneutrino.com/as/'\" />
              	";
}
?>

<?php
	session_start();
	$logged_in = $_SESSION['logged_in'];
  	$username = $_SESSION['username'];
  	$ID = $_SESSION['ID'];
  	
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
  	
  	$result = mysqli_query($con,"SELECT * FROM USERS WHERE USERNAME='$username'");
	while($row = mysqli_fetch_array($result)) {
		
		$lat = $row['LATITUDE'];
		$lng = $row['LONGITUDE'];
		$email = $row['EMAIL'];
		$verified = $row['VERIFIED'];
		$name = $row['FIRST_NAME'];
		$code = $row['CODE'];
		$referrals = $row['REFERRALS'];
		$message = $row['MESSAGE'];
		$healthy = $row['D411'];
	}
?>                        
                            
                            
                            
                            
                            
                            
                            
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/accountpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<link rel="shortcut icon" type="image/png" href="https://electronneutrino.com/as/images/logo.PNG"/>
<meta name="description" content="">
<meta name="author" content="">
<!-- InstanceBeginEditable name="doctitle" -->
<title>ADG Research | Share</title>
<!-- InstanceEndEditable -->
<!-- ../bootstrap core CSS -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../bootstrap/css/dashboard.css" rel="stylesheet">

<!-- Carousel -->
<link href="../bootstrap/css/carousel.css" rel="stylesheet">

<!-- Speedometer -->
<link href="css/speedometer.css" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
.navigation * {
	border-radius: 0 !important;
}
</style>
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
#share a {
	color: #FFF;
	background-color: #337ab7;
}
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<div class="navbar-wrapper">
    <div class="container navigation">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="https://electronneutrino.com/as">ADG Research</a> </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li id="home"><a href="https://electronneutrino.com/as">Home</a></li>
              <li id="research"><a href="https://electronneutrino.com/as/research/">Research</a></li>
              <li id="map_link"><a href="https://electronneutrino.com/as/map/">Map</a></li>
              <li class="dropdown"> <a href="https://electronneutrino.com/as/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Projects<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li id="simulator"><a href="https://electronneutrino.com/as/simulator/">Simulator</a></li>
                  <li id="strii"><a href="https://electronneutrino.com/as/strii/">Strii</a></li>
                  <li id="android"><a href="https://electronneutrino.com/as/android/">Android</a></li>
                </ul>
              </li>
              <!--
              <li class="dropdown"> <a href="https://electronneutrino.com/as/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li id="alik"><a href="https://electronneutrino.com/as/#">Alik</a></li>
                  <li id="dyusha"><a href="https://electronneutrino.com/as/#">Dyusha</a></li>
                  <li id="grisha"><a href="https://electronneutrino.com/as/#">Grisha</a></li>
                </ul>
                -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <?php
              	session_start();
              	$li = $_SESSION["logged_in"];
              	if ($li == 1) {}
              	else {
              		echo "
		              <li id=\"join\"><a href=\"https://electronneutrino.com/as/join/\">Join Now</a></li>
		              <li id=\"login\"><a href=\"https://electronneutrino.com/as/login/\">Log In</a></li>
		        ";
		}
		?>
              <?php
              	session_start();
              	$li = $_SESSION["logged_in"];
              	if ($li == 1) {
              		echo "
              			<li class=\"dropdown\"> <a href=\"https://electronneutrino.com/as/#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">My Account<span class=\"caret\"></span></a>
		                <ul class=\"dropdown-menu\" role=\"menu\">
		                  <li id=\"dashboard\"><a href=\"https://electronneutrino.com/as/dashboard/\">Dashboard</a></li>
		                  <li id=\"calendar\"><a href=\"https://electronneutrino.com/as/calendar/\">Calendar</a></li>
		                  <li id=\"share\"><a href=\"https://electronneutrino.com/as/share/\">Share</a></li>
		                  <li id=\"settings\"><a href=\"https://electronneutrino.com/as/settings/\">Settings</a></li>
		                  <li class=\"divider\"></li>
		                  <li><a href=\"https://electronneutrino.com/as/logout/\">Log Out</a></li>
		                </ul>
		              </li>
              		";
              	}
              	?>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <div class="container-fluid"><!-- InstanceBeginEditable name="Content" -->
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
           <li><a href="../dashboard">Dashboard</a></li>
          <li><a href="../calendar">Calendar</a></li>
          <li class="active"><a href="../share">Share<span class="sr-only">(current)</span></a></li>
          <li><a href="../settings">Settings</a></li>
        </ul>
        <ul class="nav nav-sidebar">
          <li><a href="../logout">Log Out</a></li>
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header">
          <h1>Share</h1>
        </div>
        <!--DYUSHA PASTE YOUR DASHBOARD CODE HERE-->
        
      </div>
    </div>
  <!-- InstanceEndEditable -->
  </div>
</div>

<!-- ../bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
<!-- InstanceEnd --></html>