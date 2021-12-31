<?php

/*Site Theme - Themes include:
'default', 'minimal-nologo', 'do-blue', 'do-green', 'do-black', 'do-yellow, 'do-red', 'do-purple', 'do-brown', 'do-white', 'do-orange', 'do-pink' */
$theme = "default";

//Page Title
$pagetitle = "Appeal / My Rust Servers";

$servername = "Rust Ban Appeal";

//Logo link - where should the user be redirected to when they click the logo?
$logolink = "index.php"; // Leave at index.php for the homepage

//Do you want a dropdown / select box for players to say what they are appealing e.g. mute, ban, forum ban
$appealoptions = false; // Set true for options, false for no options


/* ------ E-Mail Settings ------ */

//Where should ban appeal forms be sent to for review? - This will be ignored if you're using custom/SMTP settings
$sendto = "Your email";

//Where should E-Mails be sent from (for confirmation emails) - This will be ignored if you're using custom/SMTP settings
$sendfrom = "Reply from email";


//SMTP SETTINGS//
//Use custom/SMTP E-Mail settings? You can safetly ignore this (keep set to 'false') if you're unsure.
$customemail = false;

//Custom/SMTP EMail Settings
$customemailhost = "mail.myemailserver.com"; //Host for the E-Mail SMTP settings
$customemailport = 587; //Port for the E-Mail SMTP settings
$customemailusername = "myemail@email.com"; //Username for the E-Mail SMTP settings (used for sending and receiving ban appeals/confirmations)
$customemailpass = "mypassword"; //Password for the E-Mail SMTP settings
$custommailsecure = false; //Encrypt your E-Mails? You should try and use this. Supports TLS.
$customemaildelay = 2; //How long in seconds shall we add a delay between E-Mails being sent out? (some email servers have maximum email restrictions, a safe default is 0-10 seconds)
$customemaildebug = false; //Enable debug/testing mode?
//END OF SMTP SETTINGS//

/* --- End of E-Mail Settings --- */


//Should we send a confirmation E-Mail to the user when they submit a ban appeal?
$sendconfirmation = true;

//Confirmation E-Mail subject
$confirmsubject = "Unban Appeal Confirmation";

//Confirmation E-Mail message (you can use HTML here)
$confirmmsg = "Your ban appeal request has been received. It will reviewed within the next few days and you will be notified via the E-Mail you provided. <br><br><strong>- Server Name</strong>";

//The message said to the user when they successfully submit a ban appeal (you can use HTML here)
$successnotice = "<div class='return' style='background-color:green;'><strong>Success!</strong></br></br>Your ban appeal has been submitted. You should receive a response via <strong>E-Mail</strong> within a day or two.</div>";

//Shall we use Google's anti-spam bot CAPTCHA? I recommend you do to prevent spam. 
//IF YOU CHOOSE TRUE, YOU MUST CONFIGURE IT BELOW (see the DOCUMENTATION & SUPPORT.txt file for details).
$captcha = true;
//CAPTCHA config:
$sitekey = "HERE";
$secretkey = "HERE";


/* ------ Accept/Deny Email Info ------ */

//Enable 'Accept' button?
$acceptbutton = true;

//What E-Mail shall we send to the player when the admin clicks the "Unban Player" button? (you can use HTML here)
$appealaccepted = "Congratulations, your ban appeal has been accepted!";
$appealacceptedsubject = "Ban Appeal Accepted";

//Enable 'Deny' button?
$denybutton = true;

//What E-Mail shall we send to the player when the admin clicks the "Deny Appeal" button? (you can use HTML here)
$appealdenied = "Hello, <br><br>Thank you for taking the time to appeal your ban. Unfortunately, your appeal has been denied.";
$appealdeniedsubject = "Ban Appeal Response";

//Please enter a password here that we can use to securely send ban appeal accepted/denied emails
$replykey = "CHANGEME"; // I recommend you change this if an Admin leaves the team

/* --- End of Accept/Deny Email Info --- */





/* ------ Admin Email Info ------ */

//Should we show the player's Minecraft head in the E-Mail? (enabling this may send your ban appeal emails to spam/junk)
//Try disabling this if your emails are going to spam/junk
$minecrafthead = true;

//Should Admins receive the applicants IP?
$provideip = true;

//Should Admins receive the country the applicant is from?
$providelocation = true;

//Should Admins receive the time that the ban appeal was submitted?
$providetime = true;

//Should Admins receive the date that the ban appeal was submitted?
$providedate = true;


/* --- End of Admin Email Info --- */

//We have included a blank website page so that you can do/add whatever you want, change to false to disable
// Rename this file to change it from 'blank-page', keep .php at the end! - you can also duplicate it to make more pages
$blankpage = true;

//Set to true to use https (requires an SSL certificate)
$ssl = false;

$checkupdate = true; //IMPORTANT for security, recommended that you keep this on, it is very easy to update this system

?>