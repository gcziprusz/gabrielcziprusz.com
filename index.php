<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to GabrielCziprusz.com</title>

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="styles/style.css" media="screen" />
	<link rel="stylesheet" href="styles/media-queries.css" />
	<link href="styles/prettyPhoto.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="styles/tipsy.css" rel="stylesheet" type="text/css" media="screen" />

	<script type="text/javascript" src="./scripts/jquery-1.7.1.min.js"></script>
	<script src="scripts/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="scripts/jquery.tipsy.js" type="text/javascript"></script>
	<script src="scripts/jquery.knob.js" type="text/javascript"></script>
	<script type="text/javascript" src="./scripts/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="./scripts/jquery.smooth-scroll.min.js"></script>
	<script type="text/javascript" src="./scripts/waypoints.min.js"></script>
	<script type="text/javascript" src="./scripts/setup.js"></script>
</head>
<body>
<div id="wrap"> 
  <!-- wrapper -->
  <div id="sidebar" > 
    <!-- the  sidebar --> 
    <!-- logo --> 
    <a href="#" id="logo">Welcome to GabrielCziprusz.com</a> 
    <!-- navigation menu -->
    <ul id="navigation">
      <li><a href="#about" class="active">About Gabriel</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#employment">Employment</a></li>
      <li><a href="#myclients">Clients</a></li>
	  <li><a href="#resume">Resume</a></li>
      <li><a href="#contact">Contact</a></li> 
    </ul>
  </div>
  <div id="container"> 
    <!-- page container -->
    <?php include 'about.php';?>
	<?php include 'portfolio.php';?>
	<div class="clear"> </div>
	<?php include 'skills.php';?>
	<?php include 'employment.php';?>
	<?php include 'myclients.php';?>
	<?php include 'resume.php';?>
	<?php include 'contact.php';?>
  </div>
</div>
<a class="gotop" href="#top">Top</a>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7572109-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
