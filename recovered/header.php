<?php
	//Start the Session
	session_start();
	require('PHP_Includes/connect.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Paintball Buddy
		</title>
		<meta charset="utf-8">
		<meta description="Developer - James McGaghey">
		<link rel="stylesheet" type="text/css" href="CSS/Style.css">
		<script type="text/javascript" src="JS/function.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 10,
    center: new google.maps.LatLng(43.630632, -79.39665)
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>



	</head>
	<body>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<section id="main_container">
			<section id="content">
				<header>
					<img id="logo" src="Images/logo.png" alt="Paintball Buddy Logo">

					<article class="social_media">
						<?php
							//3. If the form is submitted or not.
							//3.1 If the form is submitted
							// if (isset($_POST['email']) and isset($_POST['password'])){

							// 	//3.1.1 Assigning posted values to variables.
							// 	$email = $_POST['email'];
							// 	$password = $_POST['password'];

							// 	//3.1.2 Checking the values are existing in the database or not
							// 	$query = "SELECT * FROM `User` WHERE email='$email' and password='$password'";

							// 	$result = mysql_query($query) or die(mysql_error());
							// 	$count = mysql_num_rows($result);
							// 	//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
							// 	if ($count == 1){
							// 		$_SESSION['email'] = $email;
							// 	}else{
							// 		//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
							// 		echo "Invalid Login Credentials.";
							// 	}
							// }
							//3.1.4 if the user is logged in Greets the user with message
							if (isset($_SESSION['email'])){
								$email = 'test';//$_SESSION['email'];
								echo '<p><a href="PHP_Includes/logout.php">Logout</a> | <a href="getProfile('.$email.');">Profile</a></p>';

							}else{

								//3.2 When the user visits the page first time, simple login form will be displayed.
								echo '<p id="login" onclick="open_l_r()">Login | Register</p>';

							}
						?>

						</p>
						<ul class="social_m_icons">
							<li class="facebook_share"><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.paintballbuddy.ca&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe></li>
							<li class="twitter_share"><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.paintballbuddy.ca" data-hashtags="paintballbuddy">Tweet</a></li>
						</ul>
					</article>


					<?php
							if (basename($_SERVER['PHP_SELF']) === "index.php"){
							 	echo '<ul id="nav">
									<li id="menu" onclick="open_close_menu()"><img src="Images/menu.png" alt="Menu"></li>
									<li class="active"><a href="index.php">Home</a></li>
									<li><a href="Events.php">Events</a></li>
									<li><a href="Fields.php">Fields</a></li>
									<li><a href="ContactUs.php">Contact Us</a></li>
								</ul>';
							} else if (basename($_SERVER['PHP_SELF']) === "Events.php"){
							 	echo '<ul id="nav">
									<li id="menu" onclick="open_close_menu()"><img src="Images/menu.png" alt="Menu"></li>
									<li><a href="index.php">Home</a></li>
									<li class="active"><a href="Events.php">Events</a></li>
									<li><a href="Fields.php">Fields</a></li>
									<li><a href="ContactUs.php">Contact Us</a></li>
								</ul>';
							} else if (basename($_SERVER['PHP_SELF']) === "Fields.php"){
							 	echo '<ul id="nav">
									<li id="menu" onclick="open_close_menu()"><img src="Images/menu.png" alt="Menu"></li>
									<li><a href="index.php">Home</a></li>
									<li><a href="Events.php">Events</a></li>
									<li class="active"><a href="Fields.php">Fields</a></li>
									<li><a href="ContactUs.php">Contact Us</a></li>
								</ul>';
							} else if (basename($_SERVER['PHP_SELF']) === "ContactUs.php"){
							 	echo '<ul id="nav">
									<li id="menu" onclick="open_close_menu()"><img src="Images/menu.png" alt="Menu"></li>
									<li><a href="index.php">Home</a></li>
									<li><a href="Events.php">Events</a></li>
									<li><a href="Fields.php">Fields</a></li>
									<li class="active"><a href="ContactUs.php">Contact Us</a></li>
								</ul>';
							}
						?>
				</header>