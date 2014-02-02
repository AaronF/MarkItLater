<?
require_once("../models/config.php");
if(isset($_POST)){
	if(isset($_POST["id"])){
		$Data = new Data;
		$user_id = getIDfromKey($_POST["user_key"]);
		$Data->deleteData("Reading_List", '', '', array("User_ID"=>$user_id,"Item_ID"=>$_POST["id"]));
	}
}
?>