<?
require_once("../models/config.php");

$user_id = getIDfromKey($loggedInUser->user_key);

$listq = $pdo_db->prepare("SELECT * FROM Reading_List WHERE User_ID = :userid ORDER BY Date_Time DESC");
$listq->bindParam(':userid', $user_id);
$listq->execute();
$listq->setFetchMode(PDO::FETCH_ASSOC); 

if($listq->rowCount()>0) {
    while($item = $listq->fetch()) {
    	?>
		<li>
			<h4><a href="<? echo $item["Item_Link"];?>" target="_blank"><? echo $item["Item_Title"];?></a></h4>
			<p class="link"><a href="<? echo $item["Item_Link"];?>" target="_blank"><? echo $item["Item_Link"];?></a></p>
			<p>Added <? echo Date("d/m/Y", $item["Date_Time"]);?> at <? echo Date("h:ma", $item["Date_Time"]);?> (<a href="javascript:;" id="delete_button" onclick="deleteItem(<? echo $item["Item_ID"];?>)">Delete</a>)</p>
		</li>
    	<?
	}
} else {
	?>
	<p>Please add a link</p>
	<?
}
?>