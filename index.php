<!-- Made with love by 16YELDARB -->
<!-- https://www.spigotmc.org/members/16yeldarb.36673/ -->

<!DOCTYPE html>

<?php 

include 'config.php';

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

	<a href="<?php echo $logolink;?>">
		<img src="assets/img/logo.png" class="logo" alt="Logo"/>
		
		<?php

		if ($theme == "minimal-nologo") {
			echo "<h1>" . $servername . "</h1>";
		}

		?>
	</a>

</div>

<div class="boxheader">

	<h1>Unban Appeal</h1>
	<h2>Fill out the form below to request an unban.</h2>

</div>

<div class="box">

	<div class="mobileheader">

		<h1>Unban Appeal</h1>
		<h2>Fill out the form below to request an unban.</h2>
		
	</div>

	<form name="banappeal" method="post" enctype="multipart/form-data" action="submit.php">

		<label for="username"><b>SteamID64</b></label>
    	<input type="text" placeholder="Enter your SteamID64" name="username" required>

    	<br>

		<label for="email"><b>Discord (for example Hoebama#3839)</b></label>
    	<input type="text" placeholder="Enter your Discord name" name="email" required>
		
		<br>
		
		<label for="email"><b>E-Mail</b></label>
    	<input type="text" placeholder="Enter a Valid E-Mail" name="email" required>

    	<?php if ($appealoptions == true){ ?>

    	<br>

    	<label for="appealoption"><b>What are you appealing?</b></label><br>
    	<select name="appealoption" required>
			<option>Ban</option>
  			<option>Mute</option>
  			<option>Kick</option>
  			<!-- To add more options simply copy and paste one of the above <option> </option> tags -->
		</select>

		<?php } ?>

    	<br>

		<label for="reason"><b>Why should we unban you?</b></label><br>
    	<input type="text" name="reason" id="reason" required>

    	<?php if ($captcha == true){echo '<div class="g-recaptcha" data-sitekey="' . $sitekey . '"></div><br>';} ?>

    	<div class="buttonwrapper"><input type="submit" name="submit" value="Submit Ban Appeal" class="button"></div>

	</form>

</div>



</body>


</html>

<!-- Covered by the MIT License Copyright (c) 2020 16YELDARB -->