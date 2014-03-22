<?php
class Add {
	public function addLink($key, $link){
		$item_title = getTitle($link);
		$user_id = getIDfromKey($key);
		echo $item_title;
		$Data = new Data;
		$Data->insertData("Reading_List", '', array("User_ID"=>$user_id,"Item_Title"=>$item_title, "Item_Link"=>$link, "Date_Time"=>time()));
	}
}
?>