<!-- Made with love by 16YELDARB -->
<!-- https://www.spigotmc.org/members/16yeldarb.36673/ -->

<!-- Rename this file to change it from 'blank-page', keep .php at the end! - you can also duplicate it to make more pages -->
<!-- You can disable this file in the config -->

<!DOCTYPE html>

<?php 

include 'config.php'; 

if ($blankpage == false) {

	header('Location: index.php');
	exit;

}

if(($ssl == true) && ($_SERVER["HTTPS"] != "on")) {
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

?>

<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $pagetitle;?></title>
	<link href="assets/img/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style-<?php echo $theme; ?>.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>


<div class="logocontainer">

	<a href="<?php echo $logolink;?>"><img src="assets/img/logo.png" class="logo" alt="Logo"/></a>

</div>

<div class="boxheader">

	<h1>Blank Page</h1>
	<h2>This is a blank page.</h2>

</div>

<div class="box">

	<div class="mobileheader">

		<h1>Blank Page</h1>
		<h2>This is a blank page.</h2>
		
	</div>

	<!-- Rename this file to change it from 'blank-page', keep .php at the end! - you can also duplicate it to make more pages -->
	<!-- You can disable this file in the config -->

	<p>Put whatever you want here!</p>

	<p>Like a second paragraph...</p>

</div>



</body>


</html>

<!-- Covered by the MIT License Copyright (c) 2018 16YELDARB -->