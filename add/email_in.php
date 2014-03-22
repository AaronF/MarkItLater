<?php
include_once("../models/config.php");

$raw_post = $_POST; 
$array = $raw_post["mandrill_events"];
$array = json_decode($array);
$text = $array[0]->msg->html;
$email = $array[0]->msg->from_email;
$reg_exUrl = "#[-a-zA-Z0-9@:%_\+.~\#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~\#?&//=]*)?#si";
if(preg_match($reg_exUrl, $text, $url)) {
	$link = $url[0];
	$userdetails = fetchUserDetailswithEmail($email);
	if($userdetails!=false){
		$key = $userdetails["User_Key"];
		$Add = new Add;
		$Add->addLink($key, $link);
	}
}
?>