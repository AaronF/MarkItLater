<?php
	include("models/config.php");
	
	if(isUserLoggedIn()) $loggedInUser->userLogOut();

	if(!isset($_COOKIE["reading_list"])){
		setcookie("reading_list", $_COOKIE["reading_list"], 1);
	}

	if(!empty($websiteUrl)) {
		$add_http = "";
		
		if(strpos($websiteUrl,"http://") === false)
		{
			$add_http = "http://";
		}
	
		header("Location: ".$add_http.$websiteUrl);
		die();
	} else {
		header("Location: http://".$_SERVER['HTTP_HOST']);
		die();
	}	
?>


