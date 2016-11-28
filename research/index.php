<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/sidePage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<link rel="shortcut icon" type="image/png" href="https://electronneutrino.com/as/images/logo.PNG"/>
<!-- InstanceBeginEditable name="doctitle" -->
<title>ADG Research | Research</title>
<!-- InstanceEndEditable -->
<!-- Bootstrap -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Carousel -->
<link href="../bootstrap/css/carousel.css" rel="stylesheet">
<style type="text/css">
@media only screen and (max-width: 480px) {
.carousel-caption h1 {
	font-size: 13px;
}
.featurette-heading {
	margin-top: 30px;
}
}
@media only screen and (min-width: 481px) and (max-width: 767px) {
.carousel-caption h1 {
	font-size: 23px;
}
.featurette-heading {
	margin-top: 30px;
}
}
.featurette-divider {
	margin-top: 20px;
	margin-bottom: 20px;
}
#about-heading {
	margin-top: 0px;
}
#developers-heading {
	margin-top: 0px;
	padding-bottom: 30px;
}
.col-lg-6 {
	padding-top: 20px;
}
.navbar-wrapper {
	position: fixed;
	border-radius: 0px;
}
.col-md-5 img {
	margin-top: 40px;
	float: bottom;
}
nav {
	border-radius: 0px;
}
.featurette-heading {
	margin-top: 70px;
}
.page-header {
	margin-top: 80px;
}
.navigation * {
	border-radius: 0 !important;
}
</style>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
#research a {
	color: #FFF;
}
</style>
<!-- InstanceEndEditable -->
</head>
<body>
<a name="top"></a>
<div class="container marketing">
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
  <!-- InstanceBeginEditable name="Other" -->
  <!-- InstanceEndEditable -->
  <div class="page-header">
    <h1><!-- InstanceBeginEditable name="Header" -->Research<!-- InstanceEndEditable --></h1>
  </div>
  <!-- InstanceBeginEditable name="Content" -->
  <div>
    <p>Current monitoring of disease spread by the Center for Disease Control relies on well-verified data. However, there is a delay in data reporting, causing a corresponding delay in epidemic detection. Besides, low geospatial resolution of the data makes highly localized predictions difficult. The goal of this project is to develop software tools to collect localized data and enable monitoring the spread of disease in a small community on a daily basis. We generate several common networks, based on the random, small world, and scale-free human network models. Then, we use the SIR (Susceptible-Infected-Recovered) model to predict and visualize the spread of disease given a number of parameters, including transmission rate and vaccination patterns. To further enhance the models, we use Census data from FactFinder to simulate epidemics on more realistic social networks, reflecting structures of individual towns or cities. However, Census data does not provide information about individuals’ health statuses and daily locations. We are developing a crowdsourcing methodology for collecting users’ health status data with precise geolocation accuracy. This online application allows users to update their daily health statuses online, providing a visual map of clusters with increased incidence of disease. In addition, we use analytical methods applied to the collected data for monitoring and predicting disease spread. The developed application will provide better ways for early detection of epidemics, identify places with high concentrations of infected people, and help trace the disease to its origin.</p>
  </div>
  <!-- InstanceEndEditable -->
  <hr class="featurette-divider">
  
  <!-- FOOTER -->
  <footer>
    <p class="pull-right"><a href="#top">Back to top</a></p>
    <p>&copy; 2014-2015 ADG Research, Inc.<br/>
      <a href="https://electronneutrino.com/terms/">Privacy</a> &middot; <a href="https://electronneutrino.com/terms/">Terms</a></p>
  </footer>
</div>
<!-- /.container --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- Nice scrolling -->
<script src="../js/scrolling.js"></script>
</body>
<!-- InstanceEnd --></html>