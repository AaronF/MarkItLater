<?php require_once("models/config.php");?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, minimum-scale=1.0"> 
	<link rel="shortcut icon" href="../siteimages/favicon.ico">
	<meta name="description" content=""/>
	<meta name="keywords" content="">
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->

    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/external/font-awesome.css">

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    
    <title><?php echo $websiteName;?> - Home</title>
</head>
<body>
<div class="grid w600">
	<div class="row clear reading_list">
		<div class="c12">
			<div class="readinglist_header">
				<h1>Reading List</h1>
			</div>
			<div class="add">
				<form id="add_form">
					<input type="url" name="link" placeholder="Link" id="input_link">
					<input type="submit" name="add_submit" id="add_submit" value="Add">
				</form>
			</div>
			<ul id="list_items">
				<script>
				$("#list_items").load( "get/list.php", function() {
				 	
				});
				</script>
			</ul>
			<p class="key">Key: <? echo $loggedInUser->user_key;?></p>
		</div>
	</div>
</div>
<script>
$("#add_form").on("submit", function(){
	var link = $("#input_link").val();
	var data = "link="+link+"&user_key=<? echo $loggedInUser->user_key;?>";
	$.ajax({
		type: "POST",
		url: "forms/add.php",
		data: data,
		success: function(msg){
			$("#input_link").val("");
			$("#input_link").focus();
			$("#list_items").load( "get/list.php", function() {});
		}
	});
	return false;
});


function deleteItem(id){
	var alert=confirm("Are you sure?");
	if (alert==true){
		var data = "id="+id+"&user_key=<? echo $loggedInUser->user_key;?>";
		$.ajax({
			type: "POST",
			url: "forms/delete.php",
			data: data,
			success: function(msg){
				$("#list_items").load( "get/list.php", function() {});
			}
		});
		return false;
	}
}
</script>
</body>
</html>