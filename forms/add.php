<?
require_once("../models/config.php");
if(isset($_POST)){
	if(isset($_POST["link"])){
		$item_title = getTitle($_POST["link"]);
		$user_id = getIDfromKey($_POST["user_key"]);
		$Data = new Data;
		$Data->insertData("Reading_List", '', array("User_ID"=>$loggedInUser->user_id,"Item_Title"=>$item_title, "Item_Link"=>$_POST["link"], "Date_Time"=>time()));
	}
}
?>
