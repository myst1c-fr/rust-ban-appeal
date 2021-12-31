<?php

include 'config.php';

if(isset($_GET["username"])) {

    if ($_GET['key'] == $replykey) {

    	$unbanlist = fopen("tounban.txt", "r+") or die (fopen("tounban.txt", "w"));

    	while(! feof($unbanlist)) {

    		$listedusername = fgets($unbanlist);
    		$listedusername = trim($listedusername);
 			if (strtolower($_GET["username"]) == $listedusername) { 

 				$contents = file_get_contents("tounban.txt");
				$removeline = str_replace($listedusername, '', $contents);
				file_put_contents("tounban.txt", $removeline);

 			}

  		}

  		fclose($unbanlist);

    } else {

    	echo "<div style='color:red'>Admin key is incorrect</div>";

    }
	

} else {

	echo "<script>window.location.href = 'http://" . $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']) . "';</script><noscript>Error 403: No permission.</noscript>";

}

?>