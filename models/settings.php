<?php
	$dbtype = "mysql"; 
	$db_host = "localhost";
	$db_user = "thetechb_rl";
	$db_pass = "testpassword";
	$db_name = "thetechb_rl";
	$db_port = "";
	$db_table_prefix = "Member_";

	$live_db = true;

	$langauge = "en";
	
	$websiteName = "Reading List";
	$websiteUrl = "http://" . $_SERVER['HTTP_HOST'] ."/";

	$emailActivation = false;

	$resend_activation_threshold = 1;
	
	$emailAddress = "aaron@farelert.com";
	
	$emailDate = date("l");
	
	$mail_templates_dir = "models/mail-templates/";
	
	$default_hooks = array("#WEBSITENAME#","#WEBSITEURL#","#DATE#");
	$default_replace = array($websiteName,$websiteUrl,$emailDate);
	
	$debug_mode = false;

	$remember_me_length = "2wk";
	
?>