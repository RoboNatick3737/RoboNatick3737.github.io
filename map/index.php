<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/sidePage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<link rel="shortcut icon" type="image/png" href="https://electronneutrino.com/as/images/logo.PNG"/>
<!-- InstanceBeginEditable name="doctitle" -->
<title>ADG Research | Map</title>
<!-- InstanceEndEditable -->
<!-- Bootstrap -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Carousel -->
<link href="../bootstrap/css/carousel.css" rel="stylesheet">

<!-- Map -->
<link rel="stylesheet" href="files/leaflet.css" />

<style type="text/css">
@media only screen and (max-width: 480px) {
.carousel-caption h1 {
	font-size: 13px;
}
.featurette-heading {
	margin-top: 30px;
}
#map {
	height: 50%;
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
<!-- WARNING: Respond.js does not work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
#map_link a {
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
    <h1><!-- InstanceBeginEditable name="Header" -->Map<!-- InstanceEndEditable --></h1>
  </div>
  <!-- InstanceBeginEditable name="Content" -->
  <div>
  <p>Note: All names have been removed for anonymity. For a map with names, please obtain a research key and visit <a href="http://electronneutrino.com/strii/map/index.php" target="_blank">the full map</a>.</p>
  <p>Tip: Right-click or ctrl+click (or tap+hold on mobile) on map to zoom to MIT.</p>
  <p><ul>
  <li>Red marker = sick</li>
  <li>Blue marker = healthy</li>
  </ul><p>
    <?php
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
?>
	<div id="map" style="max-width: 100%; height: auto"></div>

	<script src="files/leaflet.js"></script>
	<script>
		var body = document.body,
    		html = document.documentElement;

		var height = Math.max( body.scrollHeight, body.offsetHeight, 
                	html.clientHeight, html.scrollHeight, html.offsetHeight );
                       
                var width = document.body.clientWidth;
                       
                document.getElementById('map').style.height = height + "px";
                document.getElementById('map').style.width = width + "px";
                
                
                

		var map = L.map('map').setView([42.359452, -71.090906], 10);

		L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
			maxZoom: 30,
			attribution: '&copy; ADG Software 2015.',
			id: 'examples.map-i875mjb7'
		}).addTo(map);

		//MARKERS

		var marker1 = L.marker([42.359452, -71.090906]).addTo(map)
			.bindPopup("<b>Welcome to MIT!</b><br />Building 4.").openPopup();
		
		var RedIcon = L.Icon.Default.extend({
	            options: {
	            	    iconUrl: 'marker-icon-red.png' 
	            }
	         });
		
		<?php
			$count = 2;
			$result = mysqli_query($con,"SELECT * FROM USERS");
			while($row = mysqli_fetch_array($result)) {
				
				$name = $row['FIRST_NAME'];
				$lat = $row['LATITUDE'];
				$lng = $row['LONGITUDE'];
				
				
				$healthy = $row['D411'];
				if ($healthy == 1) {
					echo "var marker" . $count . " = L.marker([" . doubleval($lat) . ", " . doubleval($lng) . "]).addTo(map).bindPopup(\"<b>" . "User" . "</b><br>" . doubleval($lat) . "," . doubleval($lng) . "\").openPopup();\n\t\t";
				}
		              	else {
		              		echo "var marker" . $count . " = L.marker([" . doubleval($lat) . ", " . doubleval($lng) . "], {icon: new RedIcon()}).addTo(map).bindPopup(\"<b>" . "User" . "</b><br>" . doubleval($lat) . "," . doubleval($lng) . "\").openPopup();\n\t\t";
		              	}
		              	
		              	//echo "var marker" . $count . " = L.marker([" . doubleval($lat) . ", " . doubleval($lng) . "], {icon: redIcon}).addTo(map).bindPopup(\"<b>" . "User" . "</b><br>" . doubleval($lat) . "," . doubleval($lng) . "\").openPopup();\n\t\t"
				$count = $count + 1;
			}
		?>
			
		function onMarkerClick(e) {
			map.setView([this.getLatLng().lat, this.getLatLng().lng], map.getZoom());
		}


		/*
		L.circle([42.424984, -71.213028], 500, {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5
		}).addTo(map).bindPopup("I am a circle.");

		L.polygon([
			[51.509, -0.08],
			[51.503, -0.06],
			[51.51, -0.047]
		]).addTo(map).bindPopup("I am a polygon.");
		*/


		var popup = L.popup();

		function onMapClick(e) {
			/*
			popup
				.setLatLng(e.latlng)
				.setContent("You clicked the map at " + e.latlng.lat.toString() + ", " + e.latlng.lng.toString())
				.openOn(map);
			*/
		}
		
		function onContextMenu(e) {
			map.setView([42.359452, -71.090906], 18);
		}

		map.on('click', onMapClick);
		map.on('contextmenu', onContextMenu);
		
		map.setView(new L.LatLng(42.280929, -71.237755), 10);
		
		<?php
			for ($i = 1; $i < $count; $i++) {
    				echo "marker" . $i . ".on('click', onMarkerClick);\n\t\t";
			}
		?>

	</script>
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